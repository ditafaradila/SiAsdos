<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliah extends Model
{
    protected $table            = 'matakuliah';
    protected $primaryKey       = 'mata_kuliah';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['mata_kuliah'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
