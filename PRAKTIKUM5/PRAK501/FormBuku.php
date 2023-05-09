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
            $data = getBuku($id);
        }
    ?>
    <form method="post" action="">
        <div>
            <label>Judul Buku</label>
            <input type="text" name="judul" value="<?=($create)?"":$data["judul_buku"]?>">
        </div>
        <div>
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?=($create)?"":$data["penulis"]?>">
        </div>
        <div>
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?=($create)?"":$data["penerbit"]?>">
        </div>
        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="tahun-terbit" value="<?=($create)?"":$data["tahun_terbit"]?>">
        </div>
        <button type="submit" name="simpan" value="simpan">Simpan</button>
    </form>

    <?php 
        if(!empty($_POST["simpan"])){
            if($create){
                insertBuku(array(":judul"=>$_POST["judul"],
                ":penulis"=>$_POST["penulis"],
                ":penerbit"=>$_POST["penerbit"],
                ":tahunterbit"=>$_POST["tahun-terbit"]));
            }else{
                updateBuku(array(":judul"=>$_POST["judul"],
                ":penulis"=>$_POST["penulis"],
                ":penerbit"=>$_POST["penerbit"],
                ":tahunterbit"=>$_POST["tahun-terbit"]), $id);
            }
        }
    ?>
</body>
</html>