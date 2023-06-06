<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $helpers = ["form"];

    public function index()
    {
        $Model = new BukuModel();
        //
        return view("index", [
            "data" => $Model->findAll()
        ]);
    }

    public function tambah()
    {
        return view("create");
    }

    public function simpan()
    {
        $rules = [
            "judul" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "tahun_terbit" => "required|integer|less_than_equal_to[2155]|greater_than_equal_to[1901]"
        ];
        //true jika semua rules terpenuhi
        if(!$this->validate($rules)){
            return redirect()->back()->withInput();
        }

        $judul = $this->request->getPost("judul");
        $penulis = $this->request->getPost("penulis");
        $penerbit = $this->request->getPost("penerbit");
        $tahun_terbit = $this->request->getPost("tahun_terbit");

        

        $model = new BukuModel();
        $model->insert([
            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit"=> $tahun_terbit
        ]);

        return redirect()->to(base_url("/"));
    }

    public function hapus($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to(base_url("/"));
    }

    public function edit($id)
    {
        $model = new BukuModel();
        return view("edit", ["data" => $model->find($id)]);
    }

    public function update($id)
    {
        $rules = [
            "judul" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "tahun_terbit" => "required"
        ];
        //true jika semua rules terpenuhi
        if(!$this->validate($rules)){
            return redirect()->back()->withInput();
        }

        $judul = $this->request->getPost("judul");
        $penulis = $this->request->getPost("penulis");
        $penerbit = $this->request->getPost("penerbit");
        $tahun_terbit = $this->request->getPost("tahun_terbit");

        $data = [
            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit"=> $tahun_terbit
        ];

        $model = new BukuModel();
        $model->update($id, $data);

        return redirect()->to(base_url("/"));
    }
}