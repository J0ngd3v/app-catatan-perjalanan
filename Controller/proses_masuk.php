<?php
session_start();
include "../config.php";
if(isset($_POST['login'])){
    $nik = mysqli_real_escape_string($konek , $_POST['nik']);
    $username = mysqli_real_escape_string($konek , $_POST['username']);


    $query = "SELECT * FROM pengguna WHERE nik='$nik' AND username='$username' ";
    $login = mysqli_query($konek , $query);
    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        if($data['role'] == "admin"){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['nik_user'] = $nik;
            $_SESSION['role'] = $data['role'];
            $_SESSION['message'] = "Berhasil Login"; 
            header("location: ../dashboard/index.php");
        }else{
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['nik_user'] = $nik;
            $_SESSION['role'] = $data['role'];
            $_SESSION['message'] = "Berhasil Login"; 
            header("location: ../dashboard/index.php");
        }
    }else{
        $_SESSION['message'] = "Gagal Login"; 
        header("Location: ../login.php");
    }
}