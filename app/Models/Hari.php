<?php

namespace App\Models;

use CodeIgniter\Model;

class Hari extends Model
{
    protected $table            = 'hari';
    protected $primaryKey       = 'hari';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['hari'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
