<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AsdosModel extends Model
{
    protected $table = "user_asdos";
    protected $primaryKey = "npm";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'password', 'nama', 'email', 'prodi', 'tahun_kurikulum',
'status', 'jk', 'tempatlahir', 'tanggallahir', 'alamat'];

    public function get_data($npm, $password){
        return $this -> db -> table ('user_asdos')
        ->where(array('npm' => $npm, 'password' => $password))
        ->get()->getRowArray();
    }
    
}