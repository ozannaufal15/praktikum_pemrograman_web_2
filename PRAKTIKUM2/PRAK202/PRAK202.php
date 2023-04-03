<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
        .flex-column{
            display: flex;
            flex-direction: column;
        }
        .important{
            color: red;
        }
        .invisible{
            display: none;
        }
        
    </style>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="name">Nama: </label>
            <input type="text" id="name" name="name">
            <span class="important">* <?php 
            //echo isset($_GET['name']);
                if(isset($_GET['name']) && $_GET['name']==""){
                    echo "Nama tidak boleh kosong";
                }
            ?></span>
        </div>
        <div>
            <label for="nim">Nim: </label>
            <input type="text" id="nim" name="nim">
            <span class="important">* <?php 
                if(isset($_GET['nim']) && $_GET['nim']==""){
                    echo "Nim tidak boleh kosong";
                }
            ?></span>
        </div>
        <div class="flex-column">
            <p>Jenis Kelamin: <span class="important">* <?php 
                //if(isset($_GET['jenisKelamin']))
                if((isset($_GET['jenisKelamin'])) && $_GET['jenisKelamin']=="0"){
                    echo "Jenis Kelamin tidak boleh kosong";
                }
                //echo $_GET['jenisKelamin'];
            ?></span>
            </p>
            <input type="radio" name="jenisKelamin" class="invisible" value="0" checked>
            <div>
            <input type="radio" name="jenisKelamin" id="jkl" value="Laki-Laki">
            <label for="jkl">Laki-Laki</label>
            </div>
            <div>
            <input type="radio" name="jenisKelamin" id="jkp" value="Perempuan">
            <label for="jkl">Perempuan</label>
            </div>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <?php 
    if(isset($_GET['name']) && isset($_GET['nim']) && isset($_GET['jenisKelamin'])){
        if($_GET['name']!="" && $_GET['nim']!="" && $_GET['jenisKelamin']!="0"){
            echo "Nama: ". $_GET['name']. "<br>";
            echo "Nim: ". $_GET['nim']. "<br>";
            echo "Jenis Kelamin: ". $_GET['jenisKelamin']. "<br>";
        }
    }
    ?>
</body>
</html>