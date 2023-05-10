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
            $data = getPeminjaman($id);
        }
    ?>
    <form method="post" action="">
        <div>
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl-pinjam" value="<?=($create)? date("Y-m-h"):$data["tgl_pinjam"]?>">
        </div>
        <div>
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl-kembali" value="<?=($create)? date("Y-m-h"):$data["tgl_kembali"]?>">
        </div>
        <div>
            <label>Judul Buku</label>
            <!-- <input type="text" name="id-buku" value="<?=($create)?"":$data["fk_id_buku"]?>"> -->
            <select name="id-buku">
            <!-- onfocus="this.size=5" onblur="this.size=1" onchange="this.size=1; this.blur();" -->
                <?php 
                    $idJudulBuku = getAllIdJudulBuku();
                    foreach($idJudulBuku as $row):
                ?>
                    <option value="<?=$row["id_buku"]?>" <?php 
                        if((!$create) && $data["fk_id_buku"]==$row["id_buku"]){
                            echo "selected";
                        }
                    ?>><?=$row["judul_buku"]?></option>
                <?php 
                    endforeach;
                ?>
            </select>
        </div>
        <div>
            <label>Peminjam</label>
            <!-- <input type="text" name="id-member" value="<?=($create)?"":$data["fk_id_member"]?>"> -->
            <select name="id-member">
            <!-- onfocus="this.size=5" onblur="this.size=1" onchange="this.size=1; this.blur();" -->
                <?php 
                    $idNamaMember = getAllIdNamaMember();
                    foreach($idNamaMember as $row):
                ?>
                    <option value="<?=$row["id_member"]?>" <?php 
                        if((!$create) && $data["fk_id_member"]==$row["id_member"]){
                            echo "selected";
                        }
                    ?>><?=$row["nama_member"]?></option>
                <?php 
                    endforeach;
                ?>
            </select>
        </div>
        <button type="submit" name="simpan" value="simpan">Simpan</button>
    </form>

    <?php 
        if(!empty($_POST["simpan"])){
            if($create){
                insertPeminjaman(array(":tglpinjam"=>$_POST["tgl-pinjam"],
                ":tglkembali"=>$_POST["tgl-kembali"],
                ":idbuku"=>$_POST["id-buku"],
                ":idmember"=>$_POST["id-member"]));
            }else{
                updatePeminjaman(array(":tglpinjam"=>$_POST["tgl-pinjam"],
                ":tglkembali"=>$_POST["tgl-kembali"],
                ":idbuku"=>$_POST["id-buku"],
                ":idmember"=>$_POST["id-member"]), $id);
            }
        }
    ?>
</body>
</html>