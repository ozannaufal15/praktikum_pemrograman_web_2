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
        $data = getAllMemberData();
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>Nomor Member</td>
            <td>Alamat</td>
            <td>Tanggal Daftar</td>
            <td>Tanggal Terakhir Bayar</td>
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
            <td><a href="./FormMember.php?id=<?=$row["id_member"]?>">edit</a></td>
        </tr>
        <?php 
                endforeach;
            endif;
        ?>
    </table>
    <button>Tambah</button>
</body>
</html>