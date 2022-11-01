<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MahasiswaModel extends Model
{
    protected $table = "user_mhs";
    protected $primaryKey = "npm";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'password', 'nama', 'email', 'prodi', 'tahun_kurikulum',
'status', 'jk', 'tempatlahir', 'tanggallahir', 'alamat', 'foto'];

    public function get_data($npm, $password){
        return $this -> db -> table ('user_mhs')
        ->where(array('npm' => $npm, 'password' => $password))
        ->get()->getRowArray();
    }
}