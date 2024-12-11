<?php

namespace App\Models;

use CodeIgniter\Model;

class YiModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getYi()
{
    // Ambil data optimasi
    $optimasiModel = new \App\Models\OptimasiModel();
    $optimasiData = $optimasiModel->getOptimasi();

    $kriteria = $optimasiData['kriteria'];
    $optimasi = $optimasiData['optimasi'];

    // Tentukan Max (Benefit) dan Min (Cost) berdasarkan jenis kriteria
    $benefitIds = array_map(fn($id) => 'C' . $id, array_column(array_filter($kriteria, fn($k) => $k['jenis'] === 'Benefit'), 'id_kriteria'));
    $costIds = array_map(fn($id) => 'C' . $id, array_column(array_filter($kriteria, fn($k) => $k['jenis'] === 'Cost'), 'id_kriteria'));

    $yiData = [];
    foreach ($optimasi as $row) {
        $max = 0;
        $min = 0;
        foreach ($row as $key => $value) {
            // Periksa apakah key termasuk dalam Benefit atau Cost
            if (in_array($key, $benefitIds)) {
                $max += $value; // Tambahkan nilai ke Max
            } elseif (in_array($key, $costIds)) {
                $min += $value; // Tambahkan nilai ke Min
            }
        }

        // Hitung Yi
        $yiData[] = [
            'nama_alternatif' => $row['nama_alternatif'],
            'max' => round($max, 2),
            'min' => round($min, 2),
            'yi' => round($max - $min, 2),
        ];
    }

    return $yiData;
}
}