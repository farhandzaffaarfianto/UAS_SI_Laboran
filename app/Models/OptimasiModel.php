<?php

namespace App\Models;

use CodeIgniter\Model;

class OptimasiModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getOptimasi()
    {
        // Ambil data bobot kriteria
        $queryKriteria = $this->db->table('kriteria')->get();
        $kriteria = $queryKriteria->getResultArray();

        // Ambil data normalisasi dengan memanggil metode di NormalisasiModel
        $normalisasiModel = new \App\Models\NormalisasiModel();
        $normalisasiData = $normalisasiModel->getNormalisasiData();
        $normalisasi = $normalisasiData['normalisasi']; // Ambil bagian data normalisasi

        // Hitung nilai optimasi
        $optimasi = [];
        foreach ($normalisasi as $alternatif => $values) {
            $optimasiRow = ['nama_alternatif' => $alternatif];
            foreach ($kriteria as $k) {
                $kriteriaId = $k['id_kriteria'];
                $bobot = $k['bobot'];
                $nilaiNormalisasi = $values[$kriteriaId] ?? 0;
                $optimasiRow['C' . $kriteriaId] = round($nilaiNormalisasi * $bobot, 2);
            }
            $optimasi[] = $optimasiRow;
        }

        return [
            'kriteria' => $kriteria,
            'optimasi' => $optimasi,
        ];
    }
}
