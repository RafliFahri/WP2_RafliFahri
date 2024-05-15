<?php
// Tugas Pertemuan 6
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiLemasModel;
use CodeIgniter\HTTP\ResponseInterface;

class DiLemas extends BaseController
{
    private $siswa;
    public function __construct() {
        $this->siswa = new DiLemasModel();
    }
    private $validationRules = [
        'kode' => [
            'label' => 'Kode Siswa',
            'rules' => 'required|min_length[1]|max_length[5]',
            'errors' => [
                'required' => 'Kode siswa harus diisi',
                'min_length' => 'Kode siswa tidak boleh kurang dari 1 karakter',
                'max_length' => 'Kode siswa tidak boleh lebih dari 5 karakter',
            ]
        ],
        'nis' => [
            'label' => 'NIS',
            'rules' => 'required|min_length[5]|max_length[5]',
            'errors' => [
                'required' => 'NIS harus diisi',
                'min_length' => 'NIS tidak boleh kurang dari 5 karakter',
                'max_length' => 'NIS tidak boleh lebih dari 5 karakter',
            ]
        ],
        'nama' => [
            'label' => 'Nama Siswa',
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Nama siswa harus diisi',
                'min_length' => 'Nama siswa tidak boleh kurang dari 3 karakter',
            ]
        ],
        'kelas' => [
            'label' => 'Kelas Siswa',
            'rules' => 'required|max_length[10]',
            'errors' => [
                'required' => 'Kelas siswa harus diisi',
                'max_length' => 'Kelas siswa tidak boleh lebih dari 10 karakter'
            ]
        ],
        'tanggal_lahir' => [
            'label' => 'Tanggal Lahir',
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal lahir harus diisi',
            ]
        ],
        'tempat_lahir' => [
            'label' => 'Tempat Lahir',
            'rules' => 'required|max_length[50]',
            'errors' => [
                'required' => 'Tempat lahir harus diisi',
                'max_length' => 'Tempat lahir tidak boleh lebih dari 50 karakter'
            ]
        ],
        'alamat' => [
            'label' => 'Alamat',
            'rules' => 'required|max_length[50]',
            'errors' => [
                'required' => 'Alamat harus diisi',
                'max_length' => 'Alamat tidak boleh lebih dari 255 karakter'
            ]
        ],
        'jenis_kelamin' => [
            'label' => 'Jenis Kelamin',
            'rules' => 'required',
            'errors' => [
                'required' => 'Jenis kelamin harus dipilih'
            ]
        ],
        'agama' => [
            'label' => 'Agama',
            'rules' => 'required',
            'errors' => [
                'required' => 'Agama harus dipilih'
            ]
        ]
    ];
    public function index()
    {
        $data['students'] = $this->siswa->getSiswa();
        if (!request()->is('post')) {
            return view('dilemasview', $data);
        }
    }
    
    public function create()
    {
        if (!$this->validate($this->validationRules)) {
            return redirect()->back()->withInput();
        } else {
            
            $data['nis'] = $this->request->getPost('nis');
            $data['nama'] = $this->request->getPost('nama');
            $data['kelas'] = $this->request->getPost('kelas');
            $data['tanggal_lahir'] = $this->request->getPost('tanggal_lahir');
            $data['tempat_lahir'] = $this->request->getPost('tempat_lahir');
            $data['alamat'] = $this->request->getPost('alamat');
            $data['jenis_kelamin'] = $this->request->getPost('jenis_kelamin');
            $data['agama'] = $this->request->getPost('agama');
    
            $this->siswa->createSiswa(
                [
                    'nis' => $this->request->getPost('nis'),
                    'nama' => $this->request->getPost('nama'),
                    'kelas' => $this->request->getPost('kelas'),
                    'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                    'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                    'alamat' => $this->request->getPost('alamat'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'agama' => $this->request->getPost('agama')
                ]
            );
            return redirect()->to('/dilemas');
        }
    }

    public function update()
    {
        if (!request()->is('post')) {
            return redirect()->to('/dilemas');
        }
        if (!$this->validate($this->validationRules)) {
            return redirect()->back()->withInput();
        } else {
            $id = $this->request->getPost('kode');
            $this->siswa->updateSiswa($id ,[
                    'nis' => $this->request->getPost('nis'),
                    'nama' => $this->request->getPost('nama'),
                    'kelas' => $this->request->getPost('kelas'),
                    'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                    'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                    'alamat' => $this->request->getPost('alamat'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'agama' => $this->request->getPost('agama')
                ]
            );
            return redirect()->to('/dilemas');
        }
    }

    public function delete($id)
    {
        if (!request()->is('delete')) {
            return redirect()->to('/dilemas');
        }

        $this->siswa->deleteSiswa($id);
        return redirect()->to('/dilemas');
    }
}
