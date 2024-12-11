<?php

namespace App\Controllers;

use App\Models\AlternatifModel;

class AlternatifController extends BaseController
{
    protected $alternatifModel;

    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
    }

    public function index()
    {
        $data['alternatif'] = $this->alternatifModel->findAll();
        return view('alternatif/index', $data);
    }

    public function create()
    {
        return view('alternatif/create');
    }

    public function store()
    {
        $this->alternatifModel->save([
            'nama_alternatif' => $this->request->getPost('nama_alternatif'),
        ]);

        return redirect()->to('/alternatif');
    }

    public function edit($id)
    {
        $data['alternatif'] = $this->alternatifModel->find($id);
        return view('alternatif/edit', $data);
    }

    public function update($id)
    {
        $this->alternatifModel->update($id, [
            'nama_alternatif' => $this->request->getPost('nama_alternatif'),
        ]);

        return redirect()->to('/alternatif');
    }

    public function delete($id)
    {
        $this->alternatifModel->delete($id);
        return redirect()->to('/alternatif');
    }
}
