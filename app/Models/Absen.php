<?php

namespace App\Models;

use CodeIgniter\Model;

class Absen extends Model
{
    protected $table            = 'absen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_lengkap', 'npm_asdos', 'mata_kuliah', 'ruang', 'kelas_praktikan', 'hari', 'jam_masuk', 'kondisi_lab'];

    public function getLastID()
    {
        return $this->db->query("select * from absen order by id desc")->getRow();
    }
}
