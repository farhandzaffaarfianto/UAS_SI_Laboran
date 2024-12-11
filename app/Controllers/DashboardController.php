<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use App\Models\PenilaianModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $alternatifModel = new AlternatifModel();
        $kriteriaModel = new KriteriaModel();
        $penilaianModel = new PenilaianModel();

        $totalAlternatif = $alternatifModel->countAllResults();
        $totalKriteria = $kriteriaModel->countAllResults();
        $totalPenilaian = $penilaianModel->countAllResults();

        return view('dashboard/index', [
            'totalAlternatif' => $totalAlternatif,
            'totalKriteria' => $totalKriteria,
            'totalPenilaian' => $totalPenilaian,
        ]);
    }
}
