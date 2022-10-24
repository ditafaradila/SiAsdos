<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AdminModel extends Model
{
    protected $table = "user_admin";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nama'];

    public function get_data($username, $password){
        return $this -> db -> table ('user_admin')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }
}