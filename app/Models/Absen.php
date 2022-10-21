<?php

namespace App\Models;

use CodeIgniter\Model;

class Absen extends Model
{
    protected $table            = 'absen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_lengkap', 'npm_asdos', 'mata_kuliah', 'ruang', 'kelas_praktikan', 'hari', 'jam_masuk', 'kondisi_lab', 'created'];


    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}
