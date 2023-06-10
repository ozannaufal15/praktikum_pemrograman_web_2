<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $helpers = ["form"];

    public function index()
    {
        return view("login");
    }

    public function login()
    {

        $data = [
            "email" => $this->request->getPost("email"),
            "password" => $this->request->getPost("password"),
        ];
        $rules = [
            "email" => "required",
            "password" => "required"
        ];
        //true jika semua rules terpenuhi
        if(!$this->validate($rules)){
            return redirect()->back()->withInput();
        }

        $model = new UserModel();
        $user = $model->where("email", $data["email"])->first();

        if($user && password_verify((string)$data["password"], $user["password"])){
            session()->set([
                "username" => $user["username"],
                "Logged_in" => true
            ]);
            return redirect()->to(base_url("/"));
        }else{
            return redirect()->to(base_url("/login"))->with("error", "Email atau Password salah");
        }
    }

    function logout() 
    {
        session()->destroy();
        return redirect()->to(base_url("/login"));
    }
}
