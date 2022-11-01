<?php
 
namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\MateriAsdos;

class MhsLogin extends BaseController{
    public function index()
    {
        return view('login/mhs_login');
    }

    public function proces()
    {
        $user_mhs = new MahasiswaModel();

        $npm = $this->request->getVar('npm');
        $password = $this->request->getVar('password');

        $cek = $user_mhs->get_data($npm, $password);

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
            session()->set('foto', $cek['foto']);
            return redirect()->to(base_url('PMmateri'));
        } else {
            session()->setFlashdata('gagal', 'npm / Password salah');
            return redirect()->to(base_url('mhs_login'));
        }
        }

    function logout()
    {
        session()->destroy();
        return redirect()->to('Views/welcome_message');
    }

    public function indexx()
    {
        $materiModel = new MateriAsdos();
        $asdos = $materiModel->findAll();

        $data = [
            'title' => 'Materi Asdos',
            'asdos' => $asdos
        ];
        return view('pagesMahasiswa\PMmateri', $data);
    }
}