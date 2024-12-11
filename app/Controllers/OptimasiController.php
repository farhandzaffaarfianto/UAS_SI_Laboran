<?php

namespace App\Controllers;

use App\Models\OptimasiModel;

class OptimasiController extends BaseController
{
    public function index()
    {
        $optimasiModel = new OptimasiModel();
        $data = $optimasiModel->getOptimasi();

        return view('optimasi/index', [
            'kriteria' => $data['kriteria'],
            'optimasi' => $data['optimasi'],
        ]);
    }
}
