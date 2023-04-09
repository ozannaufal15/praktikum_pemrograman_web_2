<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 50px;
        }
        p{
            font-size: 50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="val1">Batas Bawah :</label>
            <input type="number" id="val1" name="val1">
        </div>
        <div>
            <label for="val2">Batas Atas :</label>
            <input type="number" id="val2" name="val2">
        </div>
        <button type="submit">Cetak</button>
    </form>
    <div>
        <p>
    <?php 
        if(isset($_POST['val1']) && isset($_POST['val2'])){
            if($_POST['val1']!="" && $_POST['val2']!=""){
                $low = $_POST['val1'];
                $high = $_POST['val2'];

                do{
                    if(($low+7)%5==0) echo "<img src=\"../PRAK303/star-images-9441.png\">";
                    else echo " ".$low." ";
                    $low++;
                }while($low <= $high);
            }
        }
    ?>
        </p>
    </div>
</body>
</html>