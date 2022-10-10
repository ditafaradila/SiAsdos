<?php

namespace App\Models;

use CodeIgniter\Model;

class Asdos extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['jam', 'senin', 'selasa', 'rabu', 'kamis', 'jumat'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}