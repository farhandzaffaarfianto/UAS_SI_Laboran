<?php

namespace App\Controllers;

use App\Models\RankingModel;

class RankingController extends BaseController
{
    public function index()
    {
        $rankingModel = new RankingModel();
        $rankingData = $rankingModel->getRanking();

        return view('ranking/index', ['rankingData' => $rankingData]);
    }
}
