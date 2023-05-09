<?php 
require_once("./Model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 1px solid black;
            padding: 5px;
        }
        td{
            max-width: 300px;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_GET["delete"])){
            deleteBuku($_GET["delete"]);
        }
        $data = getAllBukuData();
    ?>
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>Penulis</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
            <td colspan="2"></td>
        </tr>
        <?php 
            if(!empty($data)):
                foreach($data as $row):
        ?>
        <tr>
            <td><?=$row["judul_buku"]?></td>
            <td><?=$row["penulis"]?></td>
            <td><?=$row["penerbit"]?></td>
            <td><?=$row["tahun_terbit"]?></td>
            <td><a href="./FormBuku.php?id=<?=$row["id_buku"]?>">edit</a></td>
            <td><a href="?delete=<?=$row["id_buku"]?>" onclick="return confirm('Are You Sure?')">Hapus</a></td>
        </tr>
        <?php 
                endforeach;
            endif;
        ?>
    </table>
    <form action="./FormBuku.php">
        <button type="submit" name="id" value="create">Tambah</button>
    </form>
</body>
</html>