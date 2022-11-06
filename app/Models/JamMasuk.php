<?php

namespace App\Models;

use CodeIgniter\Model;

class JamMasuk extends Model
{
    protected $table            = 'jam';
    protected $primaryKey       = 'jam_masuk';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['jam_masuk', 'jam_masuk_kelas'];

    // Dates
    // protected $useTimestamps = true;
    protected $dateFormat    = 'TIME';
    // protected $createdField  = 'tanggal_masuk';
    // protected $updatedField  = 'updated_at';
}
