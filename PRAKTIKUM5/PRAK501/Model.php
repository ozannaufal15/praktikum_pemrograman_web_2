<?php 
require_once("./Koneksi.php");

#############################################################################
####                               Member                                 ###
#############################################################################

function getAllMemberData(){
    $query = "SELECT * FROM member";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAllIdNamaMember(){
    $query = "SELECT id_member, nama_member FROM member";
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

#############################################################################
####                                Buku                                  ###
#############################################################################

function getAllBukuData(){
    $query = "SELECT * FROM buku";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAllIdJudulBuku(){
    $query = "SELECT id_buku, judul_buku FROM buku";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBuku($id){
    $query = "SELECT * FROM buku WHERE id_buku=$id";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetch();
}

function insertBuku($arr){
    try{
        $query = "INSERT INTO buku(judul_buku, penulis, penerbit, tahun_terbit) VALUES (:judul, :penulis, :penerbit, :tahunterbit)";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $res = $stmt->execute($arr);
        if(!empty($res)){
            header("location:Buku.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function updateBuku($arr, $id){
    try{
        $judul = $arr[":judul"];
        $penulis = $arr[":penulis"];
        $penerbit = $arr[":penerbit"];
        $tahunTerbit = $arr[":tahunterbit"];
        $query = "UPDATE buku SET judul_buku='$judul', 
            penulis='$penulis', penerbit='$penerbit', 
            tahun_terbit=$tahunTerbit
            WHERE id_buku=$id";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $res = $stmt->execute();
        if(!empty($res)){
            header("location:Buku.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function deleteBuku($id){
    try{
        $query = "DELETE FROM buku WHERE id_buku=$id";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

#############################################################################
####                            Peminjaman                                ###
#############################################################################

function getAllPeminjamanData(){
    $query = "SELECT p.id_peminjaman, p.tgl_pinjam, p.tgl_kembali, b.judul_buku, m.nama_member, b.id_buku, m.id_member 
            FROM peminjaman p 
            INNER JOIN buku b ON p.fk_id_buku=b.id_buku
            INNER JOIN member m ON p.fk_id_member=m.id_member";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getPeminjaman($id){
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman=$id";
    $stmt = $GLOBALS["koneksi"]->prepare($query);
    $stmt->execute();
    return $stmt->fetch();
}

function insertPeminjaman($arr){
    try{
        $query = "INSERT INTO peminjaman(tgl_pinjam, tgl_kembali, fk_id_buku, fk_id_member) VALUES (:tglpinjam, :tglkembali, :idbuku, :idmember)";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $res = $stmt->execute($arr);
        if(!empty($res)){
            header("location:Peminjaman.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function updatePeminjaman($arr, $id){
    try{
        $tglPinjam = $arr[":tglpinjam"];
        $tglKembali = $arr[":tglkembali"];
        $idBuku = $arr[":idbuku"];
        $idMember = $arr[":idmember"];
        $query = "UPDATE Peminjaman SET 
            tgl_pinjam='$tglPinjam', 
            tgl_kembali='$tglKembali',
            fk_id_buku=$idBuku,
            fk_id_member=$idMember
            WHERE id_Peminjaman=$id";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $res = $stmt->execute();
        if(!empty($res)){
            header("location:Peminjaman.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function deletePeminjaman($id){
    try{
        $query = "DELETE FROM peminjaman WHERE id_peminjaman=$id";
        $stmt = $GLOBALS["koneksi"]->prepare($query);
        $stmt->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>