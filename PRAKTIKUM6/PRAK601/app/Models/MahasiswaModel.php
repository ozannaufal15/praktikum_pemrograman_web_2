<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Expr\Cast\String_;

class MahasiswaModel extends Model
{
    protected $nama;
    protected $nim;
    protected $hobi;
    protected $skill;
    protected $prodi;
    protected $email;

    public function getNama()
    {
        return $this->nama;
    }

    //constructor
    public function __construct(
        String $nama = "", 
        String $nim = "", 
        Array $hobi = NULL, 
        Array $skill = NULL, 
        String $prodi,
        String $email = "") 
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->hobi = $hobi;
        $this->skill = $skill;
        $this->prodi = $prodi;
        $this->email = $email;
    }
}
