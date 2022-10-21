<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;

class JadwalController extends BaseController
{
    public function index()
    {
        $jadwalModel = new Jadwal();
        $asdos = $jadwalModel->findAll();

        $data = [
            'title' => 'Jadwal Asdos',
            'asdos' => $asdos
        ];
        return view('pages/home', $data);
    }

    public function edit($id)
    {
        $jadwalModel = new Jadwal();
        $asdos = $jadwalModel->find($id);

        $data = [
            'title' => 'Edit Data asdos',
            'asdos' => $asdos
        ];

        return view('pages/editjadwal', $data);
    }

    public function update($id)
    {
        $jadwalModel = new Jadwal();
        $data = [
            'jam' => $this->request->getVar('jam'),
            'senin' => $this->request->getPost('senin'),
            'selasa' => $this->request->getPost('selasa'),
            'rabu' => $this->request->getVar('rabu'),
            'kamis' => $this->request->getVar('kamis'),
            'jumat' => $this->request->getVar('jumat')
        ];

        $jadwalModel->update($id, $data);
        return redirect()->to('home');
    }
}
