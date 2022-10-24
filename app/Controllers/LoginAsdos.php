<?php
 
namespace App\Controllers;
 
use App\Models\AdminModel;
use App\Models\AsdosModel;

class LoginAsdos extends BaseController
{
    public function index()
    {
        return view('login/asdos_login');
    }

    public function processs()
    {
        $user_admin = new AsdosModel();

        $npm = $this->request->getVar('npm');
        $password = $this->request->getVar('password');

        $cek = $user_admin->get_data($npm, $password);

        if (($cek['npm'] == $npm) && ($cek['password'] == $password))
        {
            session()->set('npm', $cek['npm']);
            session()->set('nama', $cek['nama']);
            session()->set('email', $cek['email']);
            session()->set('prodi', $cek['prodi']);
            session()->set('tahun_kurikulum', $cek['tahun_kurikulum']);
            session()->set('jk', $cek['jk']);
            session()->set('tanggallahir', $cek['tanggallahir']);
            session()->set('tempatlahir', $cek['tempatlahir']);
            session()->set('status', $cek['status']);
            session()->set('alamat', $cek['alamat']);
            return redirect()->to(base_url('/Ashome'));
        } else {
            session()->setFlashdata('gagal', 'npm / Password salah');
            return redirect()->to(base_url('asdos_login'));
        }
        }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/admin_login');
    }
}