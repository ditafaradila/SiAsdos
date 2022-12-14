<?php
 
namespace App\Controllers;
 
use App\Models\AdminModel;
 
class LoginAdmin extends BaseController
{
    public function index()
    {
        return view('login/admin_login');
    }

    public function process()
    {
        $user_admin = new AdminModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $cek = $user_admin->get_data($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password))
        {
            session()->set('username', $cek['username']);
            session()->set('nama', $cek['nama']);
            
            return redirect()->to(base_url('/home'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('admin_login'));
        }
        }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/admin_login');
    }
}