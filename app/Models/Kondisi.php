<?php

namespace App\Models;

use CodeIgniter\Model;

class Kondisi extends Model
{
    protected $table            = 'kondisi';
    protected $primaryKey       = 'kondisi';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kondisi'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
