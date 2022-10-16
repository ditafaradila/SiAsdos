<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class PengumumanControl extends BaseController
{
    public function PengumumanLain()
    {
        $UmumModel = new PengumumanModel();
        $umum = $UmumModel->findAll();

        $data = [
            'title' => 'Pengumuman Lain',
            'pengumumanlain' => $umum
        ];

        return view('pages/pengumumanLain', $data);
    }
    public function index()
    {
        $AnnounceModel = new PengumumanModel();
        $ini = $AnnounceModel->findAll();

        $data = [
            'title' => 'Pengumuman Lain',
            'ini' => $ini
        ];

        return view('pages/PengumumanList', $data);
    }
    public function store()
    {
        $data = [
            'title' => 'Membuat Pengumuman Baru'
        ];

        return view('pages/pengumumanLain');
    }
    public function create()
    {
        if (!$this->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/PengumumanLain');
        }
        $Lain = new PengumumanModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $Lain->insert($data);
        return redirect()->to('/pages');
    }
    public function edit($id)
    {
        $AnnounceModel = new PengumumanModel();
        $data = [
            'ini' => $AnnounceModel->find($id),
            'title' => 'Edit Data'
        ];

        return view('pages/', $data);
    }
}
