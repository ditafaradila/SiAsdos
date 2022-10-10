<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengumuman extends Model
{
    protected $table = "pengumuman";
    protected $primaryKey = "id";

    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'npm', 'mk', 'semester', 'kelas'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_masuk';
    protected $updatedField  = 'update_at';
    // function cari($katakunci)
    // {
    //     //budi gmail
    //     $builder = $this->table("pengumuman");
    //     $arr_katakunci = explode(" ", $katakunci);
    //     for ($x = 0; $x < count($arr_katakunci); $x++) {
    //         $builder->orLike('nama', $arr_katakunci[$x]);
    //         $builder->orLike('npm', $arr_katakunci[$x]);
    //         $builder->orLike('mk', $arr_katakunci[$x]);
    //     }
    //     return $builder;
    // }
}
