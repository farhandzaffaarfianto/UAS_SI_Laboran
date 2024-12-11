<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['nama_kriteria', 'jenis', 'bobot'];

    // Tambahan jika Anda ingin menambahkan validasi
    protected $validationRules = [
        'nama_kriteria' => 'required',
        'jenis' => 'required|in_list[Benefit,Cost]',
        'bobot' => 'required|decimal|greater_than[0]',
    ];
}
