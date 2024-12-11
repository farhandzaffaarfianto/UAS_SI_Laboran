<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $allowedFields = ['id_alternatif', 'id_kriteria', 'nilai'];

    public function getPenilaian()
    {
        return $this->select('penilaian.*, alternatif.nama_alternatif, kriteria.nama_kriteria')
            ->join('alternatif', 'alternatif.id_alternatif = penilaian.id_alternatif')
            ->join('kriteria', 'kriteria.id_kriteria = penilaian.id_kriteria')
            ->findAll();
    }
}
