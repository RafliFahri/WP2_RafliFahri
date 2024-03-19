<?php

namespace App\Models;

use CodeIgniter\Model;

//Tugas Pertemuan 2
class ModelLatihan1 extends Model
{
    public $nilai1, $nilai2, $hasil;

    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
