<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiModel extends Model
{
    protected $table = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $allowedFields = ['id_alternatif', 'id_kriteria', 'nilai'];

    public function getNormalisasiData()
    {
        // Ambil semua data kriteria
        $db = \Config\Database::connect();
        $builder = $db->table('kriteria');
        $kriteria = $builder->get()->getResultArray();

        // Ambil data penilaian join alternatif
        $builder = $db->table('penilaian');
        $builder->select('alternatif.nama_alternatif, kriteria.id_kriteria, penilaian.nilai');
        $builder->join('alternatif', 'penilaian.id_alternatif = alternatif.id_alternatif');
        $builder->join('kriteria', 'penilaian.id_kriteria = kriteria.id_kriteria');
        $penilaian = $builder->get()->getResultArray();

        // Hitung Normalisasi
        $normalisasi = [];
        foreach ($kriteria as $k) {
            $idKriteria = $k['id_kriteria'];

            // Hitung akar kuadrat dari jumlah kuadrat nilai setiap kriteria
            $builder = $db->table('penilaian');
            $builder->select('nilai');
            $builder->where('id_kriteria', $idKriteria);
            $result = $builder->get()->getResultArray();

            // Menghitung sum nilai kuadrat
            $sum = 0;
            foreach ($result as $value) {
                $sum += pow($value['nilai'], 2);
            }
            $normalisasi[$idKriteria] = sqrt($sum);
        }

        // Bangun tabel normalisasi
        $normalisasiData = [];
        foreach ($penilaian as $penilaianRow) {
            $idKriteria = $penilaianRow['id_kriteria'];
            $normalisasiData[$penilaianRow['nama_alternatif']][$idKriteria] = round(
                $penilaianRow['nilai'] / $normalisasi[$idKriteria],
                2
            );
        }

        return ['kriteria' => $kriteria, 'normalisasi' => $normalisasiData];
    }
}
