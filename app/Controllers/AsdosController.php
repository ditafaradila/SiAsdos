<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;
use App\Models\AsdosModel;

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
}