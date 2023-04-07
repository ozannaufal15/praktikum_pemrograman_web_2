<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <?php 
        if(!isset($_POST['val']) || $_POST['val']=="") :
    ?>
        <form action="" method="post">
            <div>
                <label for="nilai">Nilai: </label>
                <input type="number" name="val" id="nilai"><br>
            </div>
            <button type="submit" name="submit">Konversi</button>
        </form>
    <?php endif;
        if(isset($_POST['val'])) :
            $val = (int)$_POST['val'];
            if(isset($_POST['button'])){
                if($_POST['button']=="kurang"){
                    $val=($val==0)? $val:$val-1;
                }else{
                    $val+=1;
                }
            }
            echo "Jumlah Bintang ".$val."<br><br>";
            for ($i=0; $i < $val; $i++) :

    ?>
        <img src="../PRAK304/star-images-9441.png">
    
    <?php 
        endfor;
    ?>
        <form action="" method="post">
            <input type="number" name="val" value="<?= $val ?>" hidden>
            <button type="submit" name="button" value="kurang">kurang</button>
            <button type="submit" name="button" value="tambah">tambah</button>
        </form>
    <?php
        //echo var_dump($val);
        endif; ?>
</body>
</html>