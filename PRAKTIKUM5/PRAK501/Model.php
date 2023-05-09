<?php 
require_once("./Koneksi.php");

function getAllMemberData(){
    $query = "SELECT * FROM member";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getMember($id){
    $query = "SELECT * FROM member WHERE id_member=$id";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetch();
}

function insertMember($arr){
    try{
        $query = "INSERT INTO member(nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (:nama, :nomor, :alamat, :tglmendaftar, :tglterakhirbayar)";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $res = $stmt->execute($arr);
        if(!empty($res)){
            header("location:Member.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function updateMember($arr, $id){
    try{
        $nama = $arr[":nama"];
        $nomor = $arr[":nomor"];
        $alamat = $arr[":alamat"];
        $tglDaftar = $arr[":tglmendaftar"];
        $tglTerakhirBayar = $arr[":tglterakhirbayar"];
        $query = "UPDATE member SET nama_member='$nama', 
            nomor_member='$nomor', alamat='$alamat', 
            tgl_mendaftar='$tglDaftar', 
            tgl_terakhir_bayar='$tglTerakhirBayar'
            WHERE id_member=$id";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $res = $stmt->execute();
        if(!empty($res)){
            header("location:Member.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function deleteMember($id){
    try{
        $query = "DELETE FROM member WHERE id_member=$id";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>