<?php

namespace App\Controllers;

class Pengumuman extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\ModelPengumuman();
    }
    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to('pengumuman');
    }
    public function edit($id)
    {
        return json_encode($this->model->find($id));
    }

    public function simpan()
    {
        $validasi  = \Config\Services::validation();
        $aturan = [
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'mk' => [
                'label' => 'MK',
                'rules' => 'required|min_length[5]|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
                    'valid_email' => 'Email yang kamu masukkan tidak valid'
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $id = $this->request->getPost('id');
            $nama = $this->request->getPost('nama');
            $npm = $this->request->getPost('npm');
            $mk = $this->request->getPost('mk');
            $semester = $this->request->getPost('semester');
            $kelas = $this->request->getPost('kelas');

            $data = [
                'id' => $id,
                'nama' => $nama,
                'npm' => $npm,
                'mk' => $mk,
                'semester' => $semester,
                'kelas' => $kelas
            ];

            $this->model->save($data);

            $hasil['sukses'] = "Berhasil memasukkan data";
            $hasil['error'] = true;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }


        return json_encode($hasil);
    }
    public function index()
    {
        $jumlahBaris = 5;
        $katakunci = $this->request->getGet('katakunci');
        if ($katakunci) {
            $pencarian = $this->model->cari($katakunci);
        } else {
            $pencarian = $this->model;
        }
        $data['katakunci'] = $katakunci;
        $data['datapengumuman'] = $pencarian->orderBy('id', 'desc')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('pengumuman_view', $data);
    }
}
