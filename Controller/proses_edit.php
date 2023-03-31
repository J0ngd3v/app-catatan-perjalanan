<?php
session_start();
include "../config.php";

// edit data perjalanan
if(isset($_POST['edit'])){
    $id = $_GET['id'];
    $judul = htmlspecialchars($_POST['judul']);
    $suhu = htmlspecialchars($_POST['suhu']);
    $lokasi = htmlspecialchars($_POST['lokasi']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    $query = "UPDATE `perjalanan` SET `judul` = '$judul', `lokasi` = '$lokasi', `suhu` = '$suhu', `keterangan` = '$keterangan' WHERE `perjalanan`.`id_perjalanan` = $id;";
    $edit = mysqli_query($konek , $query);
    if(mysqli_affected_rows($konek) > 0){
        $_SESSION['edit_sukses'] = "Berhasil Edit Perjalanan";
        header("location: ../dashboard/mynote.php");
    }else{
        $_SESSION['edit_gagal'];
        header("location: ../dashboard/mynote.php");
    }
}