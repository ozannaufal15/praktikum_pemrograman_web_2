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
        <button type="submit">Konversi</button>
    </form>
    <h4>
        <?php 
            if(isset($_GET['val'])){
                $val = $_GET['val'];
                echo $val;
                if($val>999){
                    echo "Anda Mengimput Melebihi Limit Bilangan";
                }
                if($val>99){
                    echo "Ratusan";
                }
                if($val>19){
                    echo "Puluhan";
                }
                if($val>9){
                    echo "Belasan";
                }
                if($val>0){
                    echo "Satuan";
                }
                if($val==0){
                    echo "Nol";
                }
            
            }
        ?>
    </h4>
</body>
</html>