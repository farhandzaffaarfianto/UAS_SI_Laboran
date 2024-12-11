<?php

namespace App\Controllers;

use App\Models\NormalisasiModel;

class NormalisasiController extends BaseController
{
    public function index()
    {
        $model = new NormalisasiModel();
        $data = $model->getNormalisasiData();

        return view('normalisasi/index', [
            'kriteria' => $data['kriteria'],
            'normalisasi' => $data['normalisasi']
        ]);
    }
}
