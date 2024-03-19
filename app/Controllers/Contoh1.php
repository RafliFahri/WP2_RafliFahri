<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

//Tugas Pertemuan 1
class Contoh1 extends BaseController
{
    public function index()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Imam Nawawi
        Saya tingga di daerah Ciputat
        olah raga yang saya sukai adalah
        Bulutangkis";
    }
}
