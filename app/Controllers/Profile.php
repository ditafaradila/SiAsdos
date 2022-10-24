<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AsdosModel;

class Profile extends BaseController
{
    public function index()
    {
        $profileModel = new AsdosModel();
        $asdos = $profileModel->findAll();

        $data = [
            'title' => 'Profile Asdos',
            'user_asdos' => $asdos
        ];
        return view('pagesAsdos/profile', $data);
    }

    public function editProf()
    {
        $data = [
            'title' => 'Edit Data Profile'
        ];
        
        return view('pagesAsdos/editProfile', $data);
    }

    public function edit($npm){
        $profileModel = new AsdosModel();
        $asdos = $profileModel->find($npm);

        $data = [
            'title' => 'Edit Data profile',
            'user_asdos' => $asdos
        ];

        return view('pagesAsdos/editProfile', $data);
    }

    public function update($npm)
    {
        $profileModel = new AsdosModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getPost('npm'),
            'prodi' => $this->request->getPost('prodi'),
            'tahun_kurikulum' => $this->request->getVar('tahun_kurikulum'),
            'status' => $this->request->getVar('status'),
            'jk' => $this->request->getVar('jk'),
            'tempatllahir' => $this->request->getPost('tempatllahir'),
            'tanggallahir' => $this->request->getVar('tanggallahir'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ];

        $profileModel->update($npm, $data);
        return redirect()->to('pagesAsdos/profile');
    }
}