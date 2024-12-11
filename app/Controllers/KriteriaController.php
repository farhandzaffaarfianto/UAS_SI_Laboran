<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class KriteriaController extends BaseController
{
    protected $kriteriaModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('kriteria/index', $data);
    }

    public function create()
    {
        return view('kriteria/create');
    }

    public function store()
    {
        $this->kriteriaModel->save([
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'jenis' => $this->request->getPost('jenis'),
            'bobot' => $this->request->getPost('bobot')
        ]);

        return redirect()->to('/kriteria');
    }

    public function edit($id)
    {
        $data['kriteria'] = $this->kriteriaModel->find($id);
        return view('kriteria/edit', $data);
    }

    public function update($id)
    {
        $this->kriteriaModel->update($id, [
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'jenis' => $this->request->getPost('jenis'),
            'bobot' => $this->request->getPost('bobot')
        ]);

        return redirect()->to('/kriteria');
    }

    public function delete($id)
    {
        $this->kriteriaModel->delete($id);
        return redirect()->to('/kriteria');
    }
}
