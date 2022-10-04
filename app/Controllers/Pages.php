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

    public function materi(){
        $data['title'] = 'Materi';
        return view('materi', $data);
    }
    
    public function profile(){
        $data['title'] = 'Profile';
        return view('profile', $data);
    }

    public function home(){
        $asdosModel = new Asdos();
        $asds = $asdosModel -> findAll();
        $data = ['title' => 'Home',
        'jadwal' => $asds
    ];
        return view('pages/home', $data);
    }

    public function login(){
        $data['title'] = 'Login';
        return view('login', $data);
    }

    public function test(){
        dd('test');
    }
}

?>