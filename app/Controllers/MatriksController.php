<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\AlternatifModel;
use App\Models\PenilaianModel;

class MatriksController extends BaseController
{
    protected $kriteriaModel;
    protected $alternatifModel;
    protected $penilaianModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
        $this->alternatifModel = new AlternatifModel();
        $this->penilaianModel = new PenilaianModel();
    }

    public function index()
    {
        // Ambil data kriteria
        $kriteria = $this->kriteriaModel->findAll();

        // Ambil data alternatif
        $alternatif = $this->alternatifModel->findAll();

        // Ambil data penilaian
        $penilaian = $this->penilaianModel
            ->select('penilaian.id_alternatif, penilaian.id_kriteria, penilaian.nilai, alternatif.nama_alternatif, kriteria.nama_kriteria')
            ->join('alternatif', 'alternatif.id_alternatif = penilaian.id_alternatif')
            ->join('kriteria', 'kriteria.id_kriteria = penilaian.id_kriteria')
            ->findAll();

        // Format data untuk matriks keputusan
        $matriks = [];
        foreach ($alternatif as $alt) {
            $row = ['nama_alternatif' => $alt['nama_alternatif']];
            foreach ($kriteria as $krit) {
                $nilai = array_filter($penilaian, function ($p) use ($alt, $krit) {
                    return $p['id_alternatif'] == $alt['id_alternatif'] && $p['id_kriteria'] == $krit['id_kriteria'];
                });
                $row[$krit['nama_kriteria']] = count($nilai) > 0 ? array_values($nilai)[0]['nilai'] : '-';
            }
            $matriks[] = $row;
        }

        return view('matriks/index', [
            'kriteria' => $kriteria,
            'matriks' => $matriks,
        ]);
    }
}
