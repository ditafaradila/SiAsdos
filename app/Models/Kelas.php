<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas extends Model
{
    protected $table            = 'kelas';
    protected $primaryKey       = 'kelas';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kelas'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
