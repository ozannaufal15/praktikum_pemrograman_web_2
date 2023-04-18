<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 10px;
        }
        table, tr, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="" method="post">
        <div>
            <label for="length">Panjang :</label>
            <input type="number" id="length" name="val1">
        </div>
        <div>
            <label for="width">Lebar :</label>
            <input type="number" id="width" name="val2">
        </div>
        <div>
            <label for="data">Nilai :</label>
            <input type="text" id="data" name="data">
        </div>
        <div>
            <button type="submit" name="submit">Cetak</button>
        </div>
    </form>
    <hr>
    <br>
    <table>
    <?php 
    function checkDataNumber($data){
        try {
            foreach($data as $a){
                $a*=1;
            }
            return true;
        }catch(TypeError){
            echo "<br>TypeError<br>";
            return false;
        }
    }

    if(isset($_POST['val1']) && isset($_POST['val2']) && isset($_POST['data'])){
    if($_POST['val1']!="" && $_POST['val2']!="" && $_POST['data']!=""){
        $col = $_POST['val1'];
        $row = $_POST['val2'];
        $data = explode(" ",$_POST['data']);
        if($row == $col && ($row > 0 || $col > 0)){
            if(checkDataNumber($data)){
                $data = array_chunk($data, $row);
                for($i=0;$i<sizeof($data) && $i<$row;$i++){    
                    echo "<tr>";
                    for($j=0;$j<sizeof($data[$i]) && $j<$col;$j++){
                        echo "<td>".$data[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
            }
        }else echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    }
    }
    ?>
    </table>
</body>
</html>