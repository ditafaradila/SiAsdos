<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AsdosModel;

class Profile extends BaseController
{
    public function index()
    {
        $profileModel = new AsdosModel();
        $asdos = $profileModel->findAll();

        $data = [
            'title' => 'Profile Asdos',
            'user_asdos' => $asdos
        ];
        return view('pagesAsdos/profile', $data);
    }

    public function edit(){
        $profileModel = new AsdosModel();
        $data['user_asdos'] = $profileModel->where('npm', session('npm'))->first();

        $data = [
            'title' => 'Profile Asdos',
            'user_asdos' => $data
        ];
        return view('pagesAsdos/editProfile', $data);
    }

    public function update($npm){
        if(!$this->validate([
            'username' => 'required',
        ])){
            return redirect()->to('/editProfile');
        }
        $asdosModel = new AsdosModel();
        $data = [
            'username' => $this -> request -> getVar('username'),
        ];

        $asdosModel -> update($npm, $data);
        return redirect()->to('/editProfile');
    }
}