<?php 
require("./Model.php");
$create;
$id = $_GET['id'];
if($id == "create"){
    $create = true;
}else{
    $create = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(!$create){
            $data = getMember($id);
        }
    ?>
    <form method="post" action="">
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?=($create)?"":$data["nama_member"]?>">
        </div>
        <div>
            <label>Nomor</label>
            <input type="text" name="nomor" value="<?=($create)?"":$data["nomor_member"]?>">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?=($create)?"":$data["alamat"]?>">
        </div>
        <div>
            <label>Tanggal Daftar</label>
            <input type="datetime-local" name="tgl-mendaftar" value="<?=($create)?date("Y-m-d h:m:s"):$data["tgl_mendaftar"]?>">
        </div>
        <div>
            <label>Tanggal Terakhir Bayar</label>
            <input type="date" name="tgl-terakhir-bayar" value="<?=($create)?date("Y-m-d"):$data["tgl_terakhir_bayar"]?>">
        </div>
        <button type="submit" name="simpan" value="simpan">Simpan</button>
    </form>

    <?php 
        if(!empty($_POST["simpan"])){
            if($create){
                insertMember(array(":nama"=>$_POST["nama"],
                ":nomor"=>$_POST["nomor"],
                ":alamat"=>$_POST["alamat"],
                ":tglmendaftar"=>$_POST["tgl-mendaftar"],
                ":tglterakhirbayar"=>$_POST["tgl-terakhir-bayar"]));
            }else{
                updateMember(array(":nama"=>$_POST["nama"],
                ":nomor"=>$_POST["nomor"],
                ":alamat"=>$_POST["alamat"],
                ":tglmendaftar"=>$_POST["tgl-mendaftar"],
                ":tglterakhirbayar"=>$_POST["tgl-terakhir-bayar"]), $id);
            }
        }
    ?>
</body>
</html>