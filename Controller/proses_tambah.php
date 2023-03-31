<?php
session_start();
include "../config.php"; 

// daftar akun
if(isset($_POST['regist'])){
    $nik = htmlspecialchars($_POST['nik']);
    $username = htmlspecialchars($_POST['username']);
    $gender = htmlspecialchars($_POST['gender']);
    $warna = htmlspecialchars($_POST['warna']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $role = htmlspecialchars($_POST['role']);
    

    $query = "INSERT INTO pengguna VALUES('$nik', '$username', '$gender','$warna', '$tanggal_lahir', '$alamat','$role')";
    $tambah = mysqli_query($konek , $query);
    if(mysqli_affected_rows($konek) > 0){
        $_SESSION['success'] = "Berhasil Regristrasi";
        header("Location: ../login.php");
    }else{
        $_SESSION['error'] = "Gagal Regristrasi";
        header("Location: ../registrasi.php");
    }
}

// tambah perjalanan

if(isset($_POST['submit'])){
    $nik = $_SESSION['nik_user'];
    $judul = htmlspecialchars($_POST['judul']);
    $jam = htmlspecialchars($_POST['jam']);
    $lokasi = htmlspecialchars($_POST['lokasi']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $suhu = htmlspecialchars($_POST['suhu']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    // konfigurasi gambar biar heker ga bisa ngapload shell
    $heker = array('jpg','png','jpeg');
    $namaFile = $_FILES['berkas']['name'];
    $x        = explode('.', $namaFile);
    $ekstensi    = strtolower(end($x));
    $namaBerkas = $_FILES['berkas']['tmp_name'];

    // cek exitensi haram atau enggak
    if(in_array($ekstensi, $heker) === true){
        $dirUpload = "../assets/gambar/user/thumb/";
        move_uploaded_file($namaBerkas , $dirUpload.$namaFile);
        $query = "INSERT INTO `perjalanan` (`id_perjalanan`, `nik_user`,`judul`, `jam`, `lokasi`,`gambar`, `tanggal`, `suhu`, `keterangan`) VALUES (NULL,' $nik' ,'$judul',' $jam ', '$lokasi','$namaFile',' $tanggal', '$suhu',' $keterangan')";
        $kirim = mysqli_query($konek , $query);

            if(mysqli_affected_rows($konek) > 0){
                $_SESSION['kondisi'] = "Berhasil Tambah Perjalanan";
                header("Location: ../dashboard/create.php");
             }else{
                $_SESSION['kondisi'] = "Gagal Tambah Data";
                header("Location: ../dashboard/create.php");
             }

    }else{

        $_SESSION['gagal'] = "Mau Apalo Heker?";
        header("Location: ../dashboard/create.php");

    }
}



