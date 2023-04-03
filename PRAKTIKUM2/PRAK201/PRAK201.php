<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 201</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="name1">Nama 1</label>
            <input type="text" id="name1" name="name1">
        </div>
        <div>
            <label for="name2">Nama 2</label>
            <input type="text" id="name2" name="name2">
        </div>
        <div>
            <label for="name3">Nama 3</label>
            <input type="text" id="name3" name="name3">
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>

    <?php 
        if(isset($_GET['submit'])){
            if(isset($_GET['name1']) && isset($_GET['name2']) && isset($_GET['name3'])){
                $arrName = [$_GET['name1'], $_GET['name2'], $_GET['name3']];
                $first;
                if(strcmp($arrName[0],$arrName[1])==-1){
                    $first=0;
                }else{
                    $first=1;
                }
    
                if(strcmp($arrName[$first],$arrName[2])==-1){
                    //$first=$first;
                }else{
                    $first=2;
                }
                
                echo $arrName[$first]."<br>";
                if(strcmp($arrName[($first-1)%3],$arrName[($first+1)%3])==-1){
                    echo $arrName[($first-1)%3]."<br>";
                    echo $arrName[($first+1)%3]."<br>";
                }else{
                    echo $arrName[($first+1)%3]."<br>";
                    echo $arrName[($first-1)%3]."<br>";
                }
            }    
        }  
    ?>
</body>
</html>