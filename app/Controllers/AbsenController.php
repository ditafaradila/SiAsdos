<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Absen;
use App\Models\Hari;
use App\Models\MataKuliah;
use App\Models\Ruang;
use App\Models\Kelas;
use App\Models\JamMasuk;
use App\Models\Kondisi;
use App\Models\Semester;


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
            'title' => 'Absen Selesai',
            'absen' => $absen
        ];
        // dd($data);
        return view('pagesAsdos/absenSelesai', $data);
    }
    public function createAbsen()
    {
        $modelHari = new Hari();
        $a = $modelHari->findAll();

        $modelSemester = new Semester();
        $g = $modelSemester->findAll();

        $modelMataKuliah = new MataKuliah();
        $b = $modelMataKuliah->findAll();

        $modelRuang = new Ruang();
        $c = $modelRuang->findAll();

        $modelKelas = new Kelas();
        $d = $modelKelas->findAll();

        $modelJamMasuk = new JamMasuk();
        $e = $modelJamMasuk->findAll();

        $modelKondisi = new Kondisi();
        $f = $modelKondisi->findAll();

        $data = [
            'title' => 'Create Absen',
            'hari' => $a,
            'semester' => $g,
            'matakuliah' => $b,
            'ruang' => $c,
            'kelas' => $d,
            'jam' => $e,
            'kondisi' => $f

        ];
        return view('pagesAsdos/CAbsen', $data);
    }
    public function simpanAbsen()
    {

        if (!$this->validate([
            'nama_lengkap' => 'required',
            'npm_asdos' => 'required',
            'semester' => 'required',
            'mata_kuliah' => 'required',
            'ruang' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'kondisi' => 'required'
        ])) {
            return redirect()->to('CAbsen');
        }
        $absenModel = new Absen();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'npm_asdos' => $this->request->getPost('npm_asdos'),
            'semester' => $this->request->getPost('semester'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas' => $this->request->getPost('kelas'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'kondisi' => $this->request->getPost('kondisi')
        ];
        $absenModel->save($data);
        return redirect()->to(base_url('/absenSelesai'));
    }
    public function editAbsen($id)
    {
        $absenModel = new Absen();
        // dd($absenModel->getLastID());
        $absen = $absenModel->find($id);

        $modelHari = new Hari();
        $a = $modelHari->findAll();

        $modelSemester = new Semester();
        $g = $modelSemester->findAll();

        $modelMataKuliah = new MataKuliah();
        $b = $modelMataKuliah->findAll();

        $modelRuang = new Ruang();
        $c = $modelRuang->findAll();

        $modelKelas = new Kelas();
        $d = $modelKelas->findAll();

        $modelJamMasuk = new JamMasuk();
        $e = $modelJamMasuk->findAll();

        $modelKondisi = new Kondisi();
        $f = $modelKondisi->findAll();


        $data = [
            'title' => 'Edit Absen',
            'hari' => $a,
            'semester' => $g,
            'matakuliah' => $b,
            'ruang' => $c,
            'kelas' => $d,
            'jam' => $e,
            'kondisi' => $f,
            'absen' => $absen
        ];
        return view('pagesAsdos/EAbsen', $data);
    }
    public function updateAbsen($id)
    {
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'npm_asdos' => 'required',
            'semester' => 'required',
            'mata_kuliah' => 'required',
            'ruang' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'kondisi' => 'required'
        ])) {
            return redirect()->to('/EAbsen/' . $id);
        }
        $absenModel = new Absen();
        $absenModel->find($id);

        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'npm_asdos' => $this->request->getPost('npm_asdos'),
            'semester' => $this->request->getPost('semester'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas' => $this->request->getPost('kelas'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'kondisi' => $this->request->getPost('kondisi')
        ];
        $absenModel->update($id, $data);
        return redirect()->to(base_url('/absenSelesai'));
    }
}
