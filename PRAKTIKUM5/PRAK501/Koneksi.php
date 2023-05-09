<?php 
$DBHOST = "localhost";
$DBNAME = "dbbuku";
$USERNAME = "root";
$PASSWORD = "";
try{
    $koneksi = new PDO("mysql:host=$DBHOST;dbname=$DBNAME","$USERNAME","$PASSWORD");
    echo "Koneksi Sukses";
}catch(PDOException $e){
    echo "Koneksi Gagal <br/>".$e->getMessage();
}

?>