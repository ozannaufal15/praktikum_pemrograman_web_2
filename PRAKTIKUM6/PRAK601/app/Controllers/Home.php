<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function view()
    {
        $mahasiswa = new MahasiswaModel("Muhammad Fauzan Naufal Ridho", "2110817310005", ["Basket", "Coding", "Membaca"], ["Basket"], "Teknologi Informasi", "2110817310005@mhs.ulm.ac.id");
        return view('index', ["mahasiswa"=>$mahasiswa, "context" => "index"]);
    }
}
