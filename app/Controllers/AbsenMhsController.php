<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AbsenMhs;
use App\Models\Hari;
use App\Models\MataKuliah;
use App\Models\Ruang;
use App\Models\Kelas;
use App\Models\JamMasuk;
use App\Models\Semester;


class AbsenMhsController extends BaseController
{
    public function index()
    {
        //= nama model
        $absenMhsModel = new AbsenMhs();
        $absenMhs = $absenMhsModel->findAll();
        $data = [
            'title' => 'Absen Mahasiswa',
            'absenMhs' => $absenMhs
        ];
        return view('pages/absenMhs', $data);
    }
    public function absenSelesaiMhs()
    {
        $absenMhsModel = new AbsenMhs();
        $absenMhs = $absenMhsModel->getLastIDMhs();
        $data = [
            'title' => 'Absen Mahasiswa Selesai',
            'absenMhs' => $absenMhs
        ];
        // dd($data);
        return view('pagesMahasiswa/absenSelesaiMhs', $data);
    }
    public function createAbsenMhs()
    {
        $modelMataKuliah = new MataKuliah();
        $b = $modelMataKuliah->findAll();

        $modelRuang = new Ruang();
        $c = $modelRuang->findAll();

        $modelKelas = new Kelas();
        $d = $modelKelas->findAll();

        $modelHari = new Hari();
        $a = $modelHari->findAll();

        $modelJamMasuk = new JamMasuk();
        $e = $modelJamMasuk->findAll();

        $modelSemester = new Semester();
        $f = $modelSemester->findAll();


        $data = [
            'title' => 'Create Absen Mhs',
            'matakuliah' => $b,
            'ruang' => $c,
            'kelas' => $d,
            'hari' => $a,
            'jam' => $e,
            'semester' => $f

        ];
        return view('pagesMahasiswa/CAbsenMhs', $data);
    }
    public function simpanAbsenMhs()
    {

        if (!$this->validate([
            'namaMhs' => 'required',
            'npmMhs' => 'required',
            'mata_kuliah' => 'required',
            'ruang' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'semester' => 'required'
        ])) {
            return redirect()->to('CAbsenMhs');
        }
        $absenMhsModel = new AbsenMhs();
        $data = [
            'namaMhs' => $this->request->getPost('namaMhs'),
            'npmMhs' => $this->request->getPost('npmMhs'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas' => $this->request->getPost('kelas'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'semester' => $this->request->getPost('semester')
        ];
        $absenMhsModel->save($data);
        return redirect()->to(base_url('/absenSelesaiMhs'));
    }
    public function editAbsenMhs($id)
    {
        $absenMhsModel = new AbsenMhs();
        // dd($absenMhsModel->getLastID());
        $absenMhs = $absenMhsModel->find($id);

        $modelMataKuliah = new MataKuliah();
        $b = $modelMataKuliah->findAll();

        $modelRuang = new Ruang();
        $c = $modelRuang->findAll();

        $modelKelas = new Kelas();
        $d = $modelKelas->findAll();

        $modelHari = new Hari();
        $a = $modelHari->findAll();

        $modelJamMasuk = new JamMasuk();
        $e = $modelJamMasuk->findAll();

        $modelSemester = new Semester();
        $f = $modelSemester->findAll();

        $data = [
            'title' => 'Edit Absen Mahasiswa',
            'absenMhs' => $absenMhs,
            'matakuliah' => $b,
            'ruang' => $c,
            'kelas' => $d,
            'hari' => $a,
            'jam' => $e,
            'semester' => $f

        ];
        return view('pagesMahasiswa/EAbsenMhs', $data);
    }
    public function updateAbsenMhs($id)
    {
        if (!$this->validate([
            'namaMhs' => 'required',
            'npmMhs' => 'required',
            'mata_kuliah' => 'required',
            'ruang' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'semester' => 'required'

        ])) {
            return redirect()->to('/EAbsenMhs/' . $id);
        }
        $absenMhsModel = new AbsenMhs();
        $absenMhsModel->find($id);

        $data = [
            'namaMhs' => $this->request->getPost('namaMhs'),
            'npmMhs' => $this->request->getPost('npmMhs'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'ruang' => $this->request->getPost('ruang'),
            'kelas' => $this->request->getPost('kelas'),
            'hari' => $this->request->getPost('hari'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'semester' => $this->request->getPost('semester')

        ];
        $absenMhsModel->update($id, $data);
        return redirect()->to(base_url('/absenSelesaiMhs'));
    }
}
