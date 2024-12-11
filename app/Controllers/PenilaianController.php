<?php

namespace App\Controllers;

use App\Models\PenilaianModel;
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;

class PenilaianController extends BaseController
{
    protected $penilaianModel;
    protected $alternatifModel;
    protected $kriteriaModel;

    public function __construct()
    {
        $this->penilaianModel = new PenilaianModel();
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        $data['penilaian'] = $this->penilaianModel->getPenilaian();
        return view('penilaian/index', $data);
    }

    public function create()
    {
        $data['alternatif'] = $this->alternatifModel->findAll();
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('penilaian/create', $data);
    }

    public function store()
    {
        $this->penilaianModel->save([
            'id_alternatif' => $this->request->getPost('id_alternatif'),
            'id_kriteria' => $this->request->getPost('id_kriteria'),
            'nilai' => $this->request->getPost('nilai'),
        ]);

        return redirect()->to('/penilaian');
    }

    public function edit($id)
    {
        $data['penilaian'] = $this->penilaianModel->find($id);
        $data['alternatif'] = $this->alternatifModel->findAll();
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('penilaian/edit', $data);
    }

    public function update($id)
    {
        $this->penilaianModel->update($id, [
            'id_alternatif' => $this->request->getPost('id_alternatif'),
            'id_kriteria' => $this->request->getPost('id_kriteria'),
            'nilai' => $this->request->getPost('nilai'),
        ]);

        return redirect()->to('/penilaian');
    }

    public function delete($id)
    {
        $this->penilaianModel->delete($id);
        return redirect()->to('/penilaian');
    }
}
