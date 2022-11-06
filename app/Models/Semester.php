<?php

namespace App\Models;

use CodeIgniter\Model;

class Semester extends Model
{
    protected $table            = 'semester';
    protected $primaryKey       = 'semester';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['semester'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
