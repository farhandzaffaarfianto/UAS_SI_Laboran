<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Home extends BaseController
{
    protected $kriteriaModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        // Memanggil view untuk halaman utama (dashboard atau lainnya)
        echo view('template');
    }

    public function kriteria()
    {
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('kriteria/index', $data);
    }

    public function testDB()
{
    $db = \Config\Database::connect();

    if ($db->connID) {
        echo "Database berhasil terhubung.";
    } else {
        echo "Gagal terhubung ke database.";
    }

    exit;
}
}
