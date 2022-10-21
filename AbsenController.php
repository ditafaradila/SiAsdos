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
    public function CAbsen()
    {
        return view('pagesAsdos/CAbsen');
    }
    public function storeAbsen()
    {

        if (!$this->validate([
            'nama_lengkap' => 'required|string',
            'npm_asdos' => 'required',
            'mata_kuliah' => 'required|string',
            'ruang' => 'required|string',
            'kelas_praktikan' => 'required|string',
            'hari' => 'required|string',
            'jam_masuk' => 'required',
            'kondisi_lab' => 'required|string',
            'created' => 'required',
        ])) {
            return redirect()->to('CAbsen');
        }
        $absenModel = new Absen();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'npm_asdos' => $this->request->getPost('npm_asdos'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas_praktikan' => $this->request->getPost('kelas_praktikum'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'kondisi_lab' => $this->request->getPost('kondisi_lab'),
            'created' => $this->request->getPost('created')
        ];
        $absenModel->save($data);
        return redirect()->to('/CAbsen')->with('status', 'Absen Berhasil Dikirim');
    }
}
