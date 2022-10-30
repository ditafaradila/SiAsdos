<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Absen;

class AbsenController extends BaseController
{
    public function index()
    {
        //= nama model
        $absenModel = new Absen();
        $absen = $absenModel->findAll();
        $data = [
            'title' => 'Absen',
            'absen' => $absen
        ];
        return view('pages/absen', $data);
    }
    public function absenSelesai()
    {
        $absenModel = new Absen();
        $absen = $absenModel->getLastID();
        $data = [
            'title' => 'Absen',
            'absen' => $absen
        ];
        // dd($data);
        return view('pagesAsdos/absenSelesai', $data);
    }
    public function createAbsen()
    {
        return view('pagesAsdos/CAbsen');
    }
    public function simpanAbsen()
    {

        if (!$this->validate([
            'nama_lengkap' => 'required',
            'npm_asdos' => 'required',
            'mata_kuliah' => 'required',
            'ruang' => 'required',
            'kelas_praktikan' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'kondisi_lab' => 'required',
        ])) {
            return redirect()->to('CAbsen');
        }
        $absenModel = new Absen();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'npm_asdos' => $this->request->getPost('npm_asdos'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas_praktikan' => $this->request->getPost('kelas_praktikan'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'kondisi_lab' => $this->request->getPost('kondisi_lab'),
        ];
        $absenModel->save($data);
        return redirect()->to(base_url('/absenSelesai'));
    }
    public function editAbsen($id)
    {
        $absenModel = new Absen();
        // dd($absenModel->getLastID());
        $absen = $absenModel->find($id);
        $data = [
            'title' => 'Edit Absen',
            'absen' => $absen
        ];
        return view('pagesAsdos/EAbsen', $data);
    }
    public function updateAbsen($id)
    {
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'npm_asdos' => 'required',
            'mata_kuliah' => 'required',
            'ruang' => 'required',
            'kelas_praktikan' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'kondisi_lab' => 'required',
        ])) {
            return redirect()->to('/EAbsen/' . $id);
        }
        $absenModel = new Absen();
        $absenModel->find($id);

        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'npm_asdos' => $this->request->getPost('npm_asdos'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas_praktikan' => $this->request->getPost('kelas_praktikan'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'kondisi_lab' => $this->request->getPost('kondisi_lab'),
        ];
        $absenModel->update($id, $data);
        return redirect()->to(base_url('/absenSelesai'));
    }
}
