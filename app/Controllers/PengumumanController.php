<?php

namespace App\Controllers;

use App\Models\Pengumuman;

class PengumumanController extends BaseController
{
    public function index()
    {
        //= nama model
        $pengumuman = new Pengumuman();
        $pengumuman = $pengumuman->findAll();
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $pengumuman
        ];
        return view('pages/pengumuman', $data);
    }
    public function createP()
    {
        return view('pages/createP');
    }
    public function storeP()
    {
        $pengumuman = new Pengumuman();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'mk' => $this->request->getPost('mk'),
            'semester' => $this->request->getPost('semester'),
            'kelas' => $this->request->getPost('kelas')
        ];
        $pengumuman->save($data);
        return redirect()->to('/pengumuman')->with('status', 'Pengumuman Berhasil Ditambahkan');
    }
    public function editP($id)
    {
        $pengumuman = new Pengumuman();
        $pengumuman = $pengumuman->find($id);
        $data = [
            'title' => 'Edit Pengumuman',
            'pengumuman' => $pengumuman
        ];
        return view('pages/editP', $data);
    }
    public function updateP($id)
    {
        $pengumuman = new Pengumuman();
        $pengumuman->find($id);

        $data = [
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'mk' => $this->request->getPost('mk'),
            'semester' => $this->request->getPost('semester'),
            'kelas' => $this->request->getPost('kelas')
        ];
        $pengumuman->update($id, $data);
        return redirect()->to(base_url('/pengumuman'))->with('status', 'Pengumuman Berhasil Diubah');
    }
    public function deleteP($id)
    {
        $pengumuman = new Pengumuman();
        $pengumuman->delete($id);
        return redirect()->to(base_url('/pengumuman'))->with('status', 'Pengumuman Berhasil Dihapus');
    }
}
