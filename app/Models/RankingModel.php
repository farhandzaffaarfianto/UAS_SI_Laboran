<?php

namespace App\Models;

use CodeIgniter\Model;

class RankingModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getRanking()
    {
        // Ambil data Yi
        $yiModel = new \App\Models\YiModel();
        $yiData = $yiModel->getYi();

        // Tambahkan peringkat berdasarkan nilai Yi (nilai akhir)
        usort($yiData, function ($a, $b) {
            return $b['yi'] <=> $a['yi']; // Urutkan descending berdasarkan Yi
        });

        // Tambahkan kolom peringkat
        foreach ($yiData as $index => &$row) {
            $row['ranking'] = $index + 1; // Peringkat dimulai dari 1
        }

        return $yiData;
    }
}
