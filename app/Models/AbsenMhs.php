<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenMhs extends Model
{
    protected $table            = 'absenmahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['namaMhs', 'npmMhs', 'mata_kuliah', 'ruang', 'kelas', 'hari', 'jam_masuk', 'semester'];

    public function getLastIDMhs()
    {
        return $this->db->query("select * from absenmahasiswa order by id desc")->getRow();
    }
}
