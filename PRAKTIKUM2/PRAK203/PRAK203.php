<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 203</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="suhu">Nilai: </label>
            <input type="number" name="val" id="suhu"><br>
            <label>Dari : </label>
            <div>
                <input type="radio" name="convertFrom" value="C">
                <label>Celcius</label>
            </div>
            <div>
                <input type="radio" name="convertFrom" value="F">
                <label>Fahrenheit</label>
            </div>
            <div>
                <input type="radio" name="convertFrom" value="R">
                <label>Rheamur</label>
            </div>
            <div>
                <input type="radio" name="convertFrom" value="K">
                <label>Kelvin</label>
            </div>
            <label>Ke : </label>
            <div>
                <input type="radio" name="convertTo" value="C">
                <label>Celcius</label>
            </div>
            <div>
                <input type="radio" name="convertTo" value="F">
                <label>Fahrenheit</label>
            </div>
            <div>
                <input type="radio" name="convertTo" value="R">
                <label>Rheamur</label>
            </div>
            <div>
                <input type="radio" name="convertTo" value="K">
                <label>Kelvin</label>
            </div>
            <button type="submit" name="submit">Konversi</button>
        </div>
    </form>
    <?php 
       if(isset($_GET['val']) && isset($_GET['convertFrom']) && isset($_GET['convertTo'])){
            if($_GET['val']!=""){
                $val = $_GET['val'];
                $from = $_GET['convertFrom'];
                $to = $_GET['convertTo'];
                switch($from){
                    case 'C': 
                        $val/=100;
                        break;
                    case 'F':
                        $val = ($val-32)/180;
                        break;
                    case 'R':
                        $val/=80;
                        break;
                    case 'K':
                        $val=($val-273)/100;
                        break;
                    default:
                        break;
                }
                switch($to){
                    case 'C': 
                        $val*=100;
                        break;
                    case 'F':
                        $val = ($val*180)+32;
                        break;
                    case 'R':
                        $val*=80;
                        break;
                    case 'K':
                        $val=($val*100)+273;
                        break;
                    default:
                        break;
                }
                echo "<h3>Hasil Koversi: ".$val." &deg;".$to."</h3>";
            }
       }
    ?>
</body>
</html>