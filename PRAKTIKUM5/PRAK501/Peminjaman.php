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
        }
        td{
            max-width: 300px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_GET["delete"])){
            deletePeminjaman($_GET["delete"]);
        }
        $data = getAllPeminjamanData();
    ?>
    <h1>Data Buku</h1>
    <table>
        <tr>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
            <td>Judul Buku</td>
            <td>Peminjam</td>
            <td colspan="2"></td>
        </tr>
        <?php 
            if(!empty($data)):
                foreach($data as $row):
        ?>
        <tr>
            <td><?=$row["tgl_pinjam"]?></td>
            <td><?=$row["tgl_kembali"]?></td>
            <td><?=$row["judul_buku"]?></td>
            <td><?=$row["nama_member"]?></td>
            <td><a href="./FormPeminjaman.php?id=<?=$row["id_peminjaman"]?>">Edit</a></td>
            <td><a href="?delete=<?=$row["id_peminjaman"]?>" onclick="return confirm('Are You Sure?')">Hapus</a></td>
        </tr>
        <?php 
                endforeach;
            endif;
        ?>
    </table>
    <form action="./FormPeminjaman.php">
        <button type="submit" name="id" value="create">Tambah</button>
    </form>
</body>
</html>