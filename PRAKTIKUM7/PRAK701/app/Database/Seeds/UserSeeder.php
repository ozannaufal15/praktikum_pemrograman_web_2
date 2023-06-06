<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
        $model->insert([
            "username" => "fauzan",
            "email" => "fauzan@email.com",
            "password" => password_hash("12345678", PASSWORD_DEFAULT)
        ]);
    }
}
