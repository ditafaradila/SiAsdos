<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalPiket;

class JadwalPiketController extends BaseController
{
    public function index()
    {
        $jadwalpiketModel = new JadwalPiket();
        $jadwalpiket = $jadwalpiketModel->findAll();

        $data = [
            'title' => 'JadwalPiket',
            'jadwalpiket' => $jadwalpiket
        ];
        return view('pages/jadwalPiket', $data);
    }
    public function jadwalPiket()
    {
        $jadwalpiketModel = new JadwalPiket();
        $jadwalpiket = $jadwalpiketModel->findAll();

        $data = [
            'title' => 'JadwalPiket',
            'jadwalpiket' => $jadwalpiket
        ];
        return view('pages/jadwalPiket', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create JadwalPiket'
        ];
        return view('pages/buat', $data);
    }

    public function store()
    {
        $jadwalpiketModel = new JadwalPiket();
        $data = [
            'jam' => $this->request->getPost('jam'),
            'senin' => $this->request->getPost('senin'),
            'selasa' => $this->request->getPost('selasa'),
            'rabu' => $this->request->getPost('rabu'),
            'kamis' => $this->request->getPost('kamis'),
            'jumat' => $this->request->getPost('jumat'),
            'lab' => $this->request->getPost('lab')
        ];

        $jadwalpiketModel->save($data);
        return redirect()->to('jadwalPiket');
    }

    public function edit($id)
    {
        $jadwalpiketModel = new JadwalPiket();
        $jadwalpiket = $jadwalpiketModel->find($id);

        $data = [
            'title' => 'Edit JadwalPiket',
            'jadwalPiket' => $jadwalpiket
        ];
        return view('pages/ubah', $data);
    }

    public function delete($id)
    {
        $jadwalpiketModel = new JadwalPiket();
        $jadwalpiketModel->delete($id);

        return redirect()->to('jadwalPiket');
    }

    public function update($id)
    {
        if (!$this->validate([
            'jam' => 'required',
            'senin' => 'required',
            'selasa' => 'required',
            'rabu' => 'required',
            'kamis' => 'required',
            'jumat' => 'required',
            'lab' => 'required'
        ])) {
            return redirect()->to('/ubah/' . $id);
        }

        $jadwalpiketModel = new JadwalPiket();
        $data = [
            'jam' => $this->request->getVar('jam'),
            'senin' => $this->request->getVar('senin'),
            'selasa' => $this->request->getVar('selasa'),
            'rabu' => $this->request->getVar('rabu'),
            'kamis' => $this->request->getVar('kamis'),
            'jumat' => $this->request->getVar('jumat'),
            'lab' => $this->request->getVar('lab')
        ];

        $jadwalpiketModel->update($id, $data);
        return redirect()->to('jadwalPiket');
    }
}
