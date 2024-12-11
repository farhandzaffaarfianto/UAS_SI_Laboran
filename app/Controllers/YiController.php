<?php

namespace App\Controllers;

use App\Models\YiModel;

class YiController extends BaseController
{
    public function index()
    {
        $yiModel = new YiModel();
        $data = $yiModel->getYi();

        return view('yi/index', ['yiData' => $data]);
    }
}
