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

    public function Create()
    {
        $data = [
            'title' => 'Create Materi'
        ];
        return view('pagesAsdos/Cmateri', $data);
    }

    public function Store()
    {
        $materiasdosModel = new MateriAsdos();
        $data = [
            'namate' => $this->request->getPost('namate'),
            'matkul' => $this->request->getPost('matkul'),
            'pertemuan' => $this->request->getPost('pertemuan'),
            'semester' => $this->request->getPost('semester'),
            'berkas' => $this->request->getFile('berkas')
        ];
        $file =  $this->request->getFile('berkas');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH . 'uploads', $newName);

        $materiasdosModel->save($data);
        return redirect()->to('materi');
    }

    public function Edit($id)
    {
        $materiasdosModel = new MateriAsdos();
        $materi = $materiasdosModel->find($id);

        $data = [
            'title' => 'Edit Materi',
            'materi' => $materi
        ];
        return view('pagesAsdos/Emateri', $data);
    }

    public function Delete($id)
    {
        $materiasdosModel = new MateriAsdos();
        $materiasdosModel->delete($id);

        return redirect()->to('materi');
    }

    public function Update($id)
    {
        if (!$this->validate([
            'namate' => 'required',
            'matkul' => 'required',
            'pertemuan' => 'required',
            'semester' => 'required',
            'berkas' => 'uploaded[berkas]|max_size[berkas,5120]'
        ])) {
            return redirect()->to('/Edit/' . $id);
        }

        $materiasdosModel = new MateriAsdos();
        $data = [
            'namate' => $this->request->getVar('namate'),
            'matkul' => $this->request->getVar('matkul'),
            'pertemuan' => $this->request->getVar('pertemuan'),
            'semester' => $this->request->getVar('semester'),
            'berkas' => $this->request->getFile('berkas')

        ];
        $file =  $this->request->getFile('berkas');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH . 'uploads', $newName);

        $materiasdosModel->update($id, $data);
        return redirect()->to('materi');
    }
}
