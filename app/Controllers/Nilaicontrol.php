<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Nilai;

class Nilaicontrol extends BaseController
{
    public function Nilai()
    {
        return view('pagesAsdos/Nilai');
    }
    public function index()
    {
        $nilaimol = new Nilai();
        $value = $nilaimol->findAll();

        $data = [
            'title' => 'Data Nilai',
            'value' => $value
        ];

        return view('pagesAsdos/listNilai', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Membuat Pengumuman Baru'
        ];

        return view('pagesAsdos/Nilai');
    }

    public function buat()
    {
        if (!$this->validate([
            'mk' => 'required|string',
            'kurikulum' => 'required|string',
            'nama' => 'required|string',
            'npm' => 'required|numeric',
            'kelas' => 'required|string',
            'nilai' => 'required|numeric',
        ])) {
            return redirect()->to('/Nilai');
        }
        $Lain = new Nilai();
        $data = [
            'mk' => $this->request->getPost('mk'),
            'kurikulum' => $this->request->getPost('kurikulum'),
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'kelas' => $this->request->getPost('kelas'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        $Lain->insert($data);
        return redirect()->to('/pagesNilai');
    }
    public function edit($id)
    {
        $AnnounceModel = new Nilai();
        $data = [
            'value' => $AnnounceModel->find($id),
            'title' => 'Edit Data'
        ];

        return view('pagesAsdos/ubahNilai', $data);
    }
    public function delete($id)
    {
        $AnnounceModel = new Nilai();
        $AnnounceModel->delete($id);
        return redirect()->to('/pagesNilai');
    }
    public function ubah($id)
    {
        if (!$this->validate([
            'mk' => $this->request->getPost('mk'),
            'kurikulum' => $this->request->getPost('kurikulum'),
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'kelas' => $this->request->getPost('kelas'),
            'nilai' => $this->request->getPost('nilai'),
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $Lain = new Nilai();
        $data = [
            'mk' => $this->request->getPost('mk'),
            'kurikulum' => $this->request->getPost('kurikulum'),
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'kelas' => $this->request->getPost('kelas'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        $Lain->ubah($id, $data);

        return redirect()->to('/pagesAsdos');
    }
}
