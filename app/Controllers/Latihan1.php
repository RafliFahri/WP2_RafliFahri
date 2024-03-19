<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLatihan1;
use CodeIgniter\HTTP\ResponseInterface;

//Tugas Pertemuan 2
class Latihan1 extends BaseController
{
    protected $model;

    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->model = new ModelLatihan1();
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model->jumlah($n1, $n2);
        return view('view-latihan1', $data);
    }
}
