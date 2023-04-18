<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
        th{
            background-color: lightgray;
        }
        td, th{
            padding: 5px;
        }
        .green{
            background-color: green;
        }
        .red{
            background-color: red;
        }
    </style>
</head>
<body>
    <table>
        <?php 
            $matkul = ["mk0" => ["Pemrograman 1", 2],
                    "mk1" => ["Praktikum Pemrograman 1", 1],
                    "mk2" => ["Pengantar Lingkungan Lahan Basah", 2],
                    "mk3" => ["Arsitektur Komputer", 3],
                    "mk4" => ["Basis Data 1", 2],
                    "mk5" => ["Praktikum Basis Data 1", 1],
                    "mk6" => ["Kalkulus", 3],
                    "mk7" => ["Rekayasa Perangkat Lunak", 3],
                    "mk8" => ["Analisis dan Perancangan Sistem", 3],
                    "mk9" => ["Komputasi Awan", 3],
                    "mk10" => ["Kecerdasan Bisnis", 3]];
            $mahasiswa = [["Ridho", ["mk0", "mk1", "mk2", "mk3"]],
                        ["Ratna", ["mk4", "mk5", "mk6"]],
                        ["Tono", ["mk7", "mk8", "mk9", "mk10"]]];
            
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Nama</th>";
            echo "<th>Mata Kuliah diambil</th>";
            echo "<th>SKS</th>";
            echo "<th>Total SKS</th>";
            echo "<th>Keterangan</th>";
            echo "</tr>";

            for ($i=0; $i < sizeof($mahasiswa); $i++) { 
                echo "<tr>";
                echo "<td>".($i+1)."</td>";
                echo "<td>".$mahasiswa[$i][0]."</td>";
                $mkFirstRow = "";
                $mkRow = "";
                $SKSCount = 0;
                foreach($mahasiswa[$i][1] as $mk){
                    if($SKSCount==0){
                        $mkFirstRow.="<td>".$matkul[$mk][0]."</td>".
                                    "<td>".$matkul[$mk][1]."</td>";
                    }else{
                        $mkRow.="<tr>".
                        "<td></td><td></td>".
                        "<td>".$matkul[$mk][0]."</td>".
                        "<td>".$matkul[$mk][1]."</td>".
                        "<td></td><td></td>".
                        "<tr>";
                        
                    }
                    $SKSCount+=$matkul[$mk][1];
                }
                echo $mkFirstRow;
                echo "<td>".$SKSCount."</td>";
                if($SKSCount<7){
                    echo "<td class=\"red\">Revisi KRS</td>";
                }else{
                    echo "<td class=\"green\">Tidak Revisi</td>";
                }
                echo "</tr>";
                echo $mkRow;
            }
        ?>
    </table>
</body>
</html>