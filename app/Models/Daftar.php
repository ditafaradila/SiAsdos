<?php

namespace App\Models;

use CodeIgniter\Model;

class Daftar extends Model
{
    protected $table            = 'pendaftaran';
    protected $primaryKey       = 'id_daftar';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['pil1', 'pil2', 'ipk1', 'ipk2','cv', 'npm'];

    public function get_data(){
        return $this->db->table('pendaftaran')
        ->join('user_asdos', 'user_asdos.npm=pendaftaran.npm')
        ->get()->getResultArray();
    }
}
