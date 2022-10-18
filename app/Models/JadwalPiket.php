<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalPiket extends Model
{
    protected $table            = 'jadwalPiket';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'lab'];
}
