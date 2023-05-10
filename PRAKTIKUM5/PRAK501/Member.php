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
            deleteMember($_GET["delete"]);
        }
        $data = getAllMemberData();
    ?>
    <h1>Data Member</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>Nomor Member</td>
            <td>Alamat</td>
            <td>Tanggal Daftar</td>
            <td>Tanggal Terakhir Bayar</td>
            <td colspan="2"></td>
        </tr>
        <?php 
            if(!empty($data)):
                foreach($data as $row):
        ?>
        <tr>
            <td><?=$row["nama_member"]?></td>
            <td><?=$row["nomor_member"]?></td>
            <td><?=$row["alamat"]?></td>
            <td><?=$row["tgl_mendaftar"]?></td>
            <td><?=$row["tgl_terakhir_bayar"]?></td>
            <td><a href="./FormMember.php?id=<?=$row["id_member"]?>">Edit</a></td>
            <td><a href="?delete=<?=$row["id_member"]?>" onclick="return confirm('Are You Sure?')">Hapus</a></td>
        </tr>
        <?php 
                endforeach;
            endif;
        ?>
    </table>
    <form action="./FormMember.php">
        <button type="submit" name="id" value="create">Tambah</button>
    </form>
</body>
</html>