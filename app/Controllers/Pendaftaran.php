<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Daftar;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Create pendaftaran asdos'
        ];
        return view('pagesMahasiswa/daftarAsdos', $data);
    }

    public function simpanDaftar(){
        if (!$this->validate([
            'cv' => [
                'rules' => 'uploaded[cv]|max_size[cv,5120]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        
        $daftarModel = new Daftar();
        $datacv = $this->request->getFile('cv');
        $fileNamecv = $datacv->getName();

        $daftarModel->insert([
            'pil1' => $this->request->getPost('pil1'),
            'pil2' => $this->request->getPost('pil2'),
            'ipk1' => $this->request->getPost('ipk1'),
            'ipk2' => $this->request->getPost('ipk2'),
            'npm' => $this->request->getPost('npm'),
            'cv' => $fileNamecv
        ]);

        $datacv->move('CV', $fileNamecv);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to('PMmateri');
    }

    public function viewPendaftar(){
        $daftarModel = new Daftar();
        $data['pendaftaran'] = $daftarModel->get_data();

        return view('pages/pendaftarAsdos', $data);
    }

    function download($id_daftar){
        $daftarModel = new Daftar();
        $data = $daftarModel->find($id_daftar);
        return $this->response->download('CV/'. $data->cv, null);
    }
}
