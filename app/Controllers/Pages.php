<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Asdos;

class Pages extends BaseController
{
    public function index(){
        return view('welcome_message');
    }

    public function view($page = 'home'){
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view(('pages/' . $page), $data);
    }

    public function jadwal(){
        $asdosModel = new Asdos();
        $asdos = $asdosModel -> findAll();
        $data = ['title' => 'Jadwal',
        'jadwal' => $asdos
    ];
        return view('pages/jadwal', $data);
    }

    public function test(){
        dd('test');
    }
}

?>