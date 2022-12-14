<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriAsdos extends Model
{
    protected $table            = 'materi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['namate', 'matkul', 'pertemuan', 'semester', 'berkas'];
}
