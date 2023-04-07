<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
    <style>
        .gambar{
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        span.blank{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="value">Tinggi</label>
            <input type="number" id="value" name="value">
        </div>
        <div>
            <label for="gambar">Alamat Gambar</label>
            <input type="url" id="gambar" name="gambar">
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    <?php 
    function echoImage($src){
        echo "<img src=\"$src\" class=\"gambar\">";
    }

    if(isset($_GET['value']) && isset($_GET['gambar'])){
        if($_GET['value']!="" && $_GET['gambar']!=""){
            $val = (int)$_GET['value'];
            $gambar = $_GET['gambar'];
            $blankCount=0;
            while($val>0){
                $i=0;
                while($i<$blankCount){
                    echo "<span class=\"blank\"></span>";
                    $i++;
                }
                $i=0;
                while($i<$val){
                    echoImage($gambar);
                    $i++;
                }
                echo "<br>";
                $val--;
                $blankCount++;
            }
        }
    }
    ?>
</body>
</html>