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
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
    <?php 
        $data = [['nama' => 'Andi','nim' => 2101001, 'uts' => 87, 'uas' => 65], 
        ['nama' => 'Budi', 'nim' => 2101002, 'uts' => 76, 'uas' => 79],
        ['nama' => 'Tono', 'nim' => 2101003, 'uts' => 50, 'uas' => 41],
        ['nama' => 'Jessica', 'nim' => 2101004, 'uts' => 60, 'uas' => 75]];

        for($i=0;$i<sizeof($data);$i++){
            $data[$i]['nilaiAkhir']=$data[$i]['uts']*0.4+$data[$i]['uas']*0.6;
            $temp = floor($data[$i]['nilaiAkhir']/10);
            switch($temp){
                case 10:
                    $data[$i]['nilaiHuruf']='A';
                    break;
                case 9:
                    $data[$i]['nilaiHuruf']='A';
                    break;
                case 8:
                    $data[$i]['nilaiHuruf']='A';
                    break;
                case 7:
                    $data[$i]['nilaiHuruf']='B';
                    break;
                case 6:
                    $data[$i]['nilaiHuruf']='C';
                    break;
                case 5:
                    $data[$i]['nilaiHuruf']='D';
                    break;
                default:
                    $data[$i]['nilaiHuruf']='E';
                    break;
            }
            
        }
        echo "<tr>";
        echo "<td>Nama</td>";
        echo "<td>NIM</td>";
        echo "<td>Nilai UTS</td>";
        echo "<td>Nilai UAS</td>";
        echo "<td>Nilai Akhir</td>";
        echo "<td>Huruf</td>";
        echo "</tr>";

        for($i=0;$i<sizeof($data);$i++){
            echo "<tr>";
            foreach($data[$i] as $a){
                echo "<td>".$a."</td>";
            }
        }
    ?>
    </table>
</body>
</html>