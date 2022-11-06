<?php

namespace App\Models;

use CodeIgniter\Model;

class Ruang extends Model
{
    protected $table            = 'ruang';
    protected $primaryKey       = 'ruang';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['ruang'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
