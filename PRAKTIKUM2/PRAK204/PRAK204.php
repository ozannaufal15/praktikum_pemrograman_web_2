<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 204</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="nilai">Nilai: </label>
            <input type="number" name="val" id="nilai"><br>
        </div>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <h4>
        <?php 
            if(isset($_GET['val']) && $_GET['val']!=""){
                $val = $_GET['val'];
                echo "Hasil: ";
                if($val>999){
                    echo "Anda Mengimput Melebihi Limit Bilangan";
                }
                elseif($val>99){
                    echo "Ratusan";
                }
                elseif($val>19 || $val==10){
                    echo "Puluhan";
                }
                elseif($val>10){
                    echo "Belasan";
                }
                elseif($val>0){
                    echo "Satuan";
                }
                elseif($val==0){
                    echo "Nol";
                }
            }
        ?>
    </h4>
</body>
</html>