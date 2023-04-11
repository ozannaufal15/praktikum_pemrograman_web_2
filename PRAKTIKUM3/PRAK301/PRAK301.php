<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
    <style>
        .merah{
            color: red;
        }
        .hijau{
            color: green;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="nilai">Jumlah Peserta: </label>
            <input type="number" name="val" id="nilai"><br>
        </div>
        <button type="submit" name="submit">Konversi</button>
    </form>

    <?php 
        if(isset($_GET['val']) && $_GET['val']!=""){
            $val = $_GET['val'];
            $i=0;
            while ($i < $val) {
                if($i % 2 == 1){
                    echo "<h4 class=\"hijau\">Peserta ke ".($i+1)."</h4>";
                }else{
                    echo "<h4 class=\"merah\">Peserta ke ".($i+1)."</h4>";
                }
                $i++;
            }
        }
    ?>
</body>
</html>