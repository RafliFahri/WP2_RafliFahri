<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;

use function PHPUnit\Framework\isNull;

// Tugas Pertemuan 4
class Matakuliah extends BaseController
{
    public function index()
    {
        // redirect()->route('form-matkul');
        // return view('view-form-matakuliah', $data);
        return view('view-form-matakuliah');
    }
    
    public function cetak()
    {
        $rules = [
            'kode' => [
                'label' => 'Kode Matakuliah',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode matakuliah Harus diisi',
                    'min_length' => 'Kode terlalu pendek'
                ]
            ],
            'nama' => [
                'label' => 'Nama Matakuliah',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama matakuliah Harus diisi',
                    'min_length' => 'Nama terlalu pendek'
                ]
            ],
        ];
        if (!$this->validate($rules)) {
            // redirect()->route('form-matkul', $this->validator->getErrors());
            // return Matakuliah::index($this->validator->getErrors());
            return view('view-form-matakuliah', $this->validator->getErrors());
        } else {
            // var_dump($this->validator->getErrors());
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks'),
            ];
            return view('view-data-matakuliah', $data);
        }
        
    }
}
