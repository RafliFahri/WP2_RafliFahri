<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
// Tugas Pertemuan 3
class Web extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Halaman Judul';
        return view('v_header').view('v_index', $data).view('v_footer');
    }
    public function about()
    {
        $data['judul'] = 'Halaman Judul';
        return view('v_header').view('v_about', $data).view('v_footer');
    }
}
