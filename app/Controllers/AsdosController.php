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
        return view('asdos/beranda', $data);
    }

    public function store(){
        if(!$this->validate([
            'jam' => 'required',
            'senin' => 'required',
            'selasa' => 'required',
            'rabu' => 'required',
            'kamis' => 'required',
            'jumat' => 'required',
        ])){
            return redirect()->to('/create');
        }

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
        return redirect()->to('/beranda');
    }

}