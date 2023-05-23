<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CrudModel;

class CrudSeeder extends Seeder
{
    public function run()
    {
        //
        $model = new CrudModel();
        $model->insert([
            "nama" => "Muhammad Fauzan Naufal Ridho",
            "nim" => "2110817310005",
            "alamat" => "Banjarbaru"
        ]);
    }
}
