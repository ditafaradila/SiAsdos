<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Asdos;

class AsdosController extends BaseController
{
    public function index()
    {
        $asdosModel = new Asdos();
        $asdos = $asdosModel->findAll();

        $data = [
            'title' => 'Asdos',
            'asdos' => $asdos
        ];
        return view('pages/jadwal', $data);
    }

    public function jadwal()
    {
        $asdosModel = new Asdos();
        $asdos = $asdosModel->findAll();

        $data = [
            'title' => 'Asdos',
            'asdos' => $asdos
        ];
        return view('pages/jadwal', $data);
    }

    public function create(){
        $data = [
            'title' => 'Create Jadwal'
        ];
        
        return view('admin/create', $data);
    }

    public function store(){
        $asdosModel = new Asdos();
        $data = [
            'jam' => $this->request->getPost('jam'),
            'senin' => $this->request->getPost('senin'),
            'selasa' => $this->request->getPost('selasa'),
            'rabu' => $this->request->getPost('rabu'),
            'kamis' => $this->request->getPost('kamis'),
            'jumat' => $this->request->getPost('jumat'),
        ];

        $asdosModel->save($data);
        return redirect()->to('pages/jadwal');
    }

    public function edit($id){
        $asdosModel = new Asdos();
        $asdos = $asdosModel->find($id);

        $data = [
            'title' => 'Edit Jadwal',
            'jadwal' => $asdos
        ];

        return view('admin/edit', $data);
    }

    public function delete($id)
    {
        $asdosModel = new Asdos();
        $asdosModel->delete($id);

        return redirect()->to('pages/jadwal');
    }

    public function update($id){
        if(!$this->validate([
            'jam' => 'required',
            'senin' => 'required',
            'selasa' => 'required',
            'rabu' => 'required',
            'kamis' => 'required',
            'jumat' => 'required'
        ])){
            return redirect()->to('/edit/' .$id);
        }

        $asdosModel = new Asdos();
        $data = [
            'jam' => $this->request->getVar('jam'),
            'senin' => $this->request->getVar('senin'),
            'selasa' => $this->request->getVar('selasa'),
            'rabu' => $this->request->getVar('rabu'),
            'kamis' => $this->request->getVar('kamis'),
            'jumat' => $this->request->getVar('jumat')
        ];

        $asdosModel->update($id, $data);
        return redirect()->to('/jadwal');
    }

}