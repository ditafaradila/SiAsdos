<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MateriAsdos;

class MateriController extends BaseController
{
    public function index()
    {
        $materiasdosModel = new MateriAsdos();
        $materi = $materiasdosModel->findAll();

        $data = [
            'title' => 'Materi',
            'materi' => $materi
        ];
        return view('pagesAsdos/materi', $data);
    }
    public function mahasiswa()
    {
        $materiasdosModel = new MateriAsdos();
        $materi = $materiasdosModel->findAll();

        $data = [
            'title' => 'Materi',
            'materi' => $materi
        ];
        return view('pagesMahasiswa/PMmateri', $data);
    }

    public function Create()
    {
        $data = [
            'title' => 'Create Materi'
        ];
        return view('pagesAsdos/Cmateri', $data);
    }

    public function Store()
    {
        if (!$this->validate([
            'namate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ], 'matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ], 'pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ], 'semester' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|max_size[berkas,5120]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $materiasdosModel = new MateriAsdos();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getName();
        $materiasdosModel->insert([
            'berkas' => $fileName,
            'namate' => $this->request->getPost('namate'),
            'matkul' => $this->request->getPost('matkul'),
            'pertemuan' => $this->request->getPost('pertemuan'),
            'semester' => $this->request->getPost('semester')
        ]);
        $dataBerkas->move('uploads', $fileName);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('materi'));
    }

    // public function Edit($id)
    // {
    //     $materiasdosModel = new MateriAsdos();
    //     $materi = $materiasdosModel->find($id);

    //     $data = [
    //         'title' => 'Edit Materi',
    //         'materi' => $materi
    //     ];
    //     return view('pagesAsdos/Emateri', $data);
    // }

    public function Delete($id)
    {
        $materiasdosModel = new MateriAsdos();
        $materiasdosModel->delete($id);

        return redirect()->to('materi');
    }

    // public function Update($id)
    // {
    //     if (!$this->validate([
    //         'namate' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak boleh kosong'
    //             ]
    //         ], 'matkul' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak boleh kosong'
    //             ]
    //         ], 'pertemuan' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak boleh kosong'
    //             ]
    //         ], 'semester' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak boleh kosong'
    //             ]
    //         ],
    //         'berkas' => [
    //             'rules' => 'uploaded[berkas]|max_size[berkas,5120]',
    //             'errors' => [
    //                 'uploaded' => 'Harus Ada File yang diupload',
    //                 'max_size' => 'Ukuran File Maksimal 2 MB'
    //             ]

    //         ]
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->to('/Edit/' . $id);
    //     }

    //     $materiasdosModel = new MateriAsdos();
    //     $dataBerkas = $this->request->getFile('berkas');
    //     $fileName = $dataBerkas->getRandomName();
    //     $materiasdosModel->insert([
    //         'berkas' => $fileName,
    //         'namate' => $this->request->getVar('namate'),
    //         'matkul' => $this->request->getVar('matkul'),
    //         'pertemuan' => $this->request->getVar('pertemuan'),
    //         'semester' => $this->request->getVar('semester')
    //     ]);
    //     $dataBerkas->move('uploads', $fileName);
    //     session()->setFlashdata('success', 'Berkas Berhasil diupload');

    //     $materiasdosModel->update($id, $materiasdosModel);
    //     return redirect()->to('materi');
    // }
    function Download($id){
        $materiasdosModel = new MateriAsdos();
        $data = $materiasdosModel->find($id);
        return $this->response->download('uploads/'. $data->berkas, null);
    }
}
