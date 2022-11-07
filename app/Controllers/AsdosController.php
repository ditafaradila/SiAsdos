<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;

class AsdosController extends BaseController
{
    public function index()
    {
        $jadwalModel = new Jadwal();
        $asdos = $jadwalModel->findAll();

        $data = [
            'title' => 'Jadwal Asdos',
            'asdos' => $asdos
        ];
        return view('pagesAsdos/Ashome', $data);
    }
    public function home()
    {
        $jadwalModel = new Jadwal();
        $asdos = $jadwalModel->findAll();

        $data = [
            'title' => 'Jadwal Asdos',
            'asdos' => $asdos
        ];
        return view('pagesMahasiswa/PMhome', $data);
    }
}
