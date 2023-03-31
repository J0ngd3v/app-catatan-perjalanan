<?php
session_start();
include "config.php";
// Cek Session Login
if(!isset($_SESSION['login'])){
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= $css ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$sweetcss?>">
    <script src="<?=$sweetjs?>"></script>
    <link rel="shortcut icon" href="assets/Gambar/twit.png" type="image/x-icon">
    <title>Travelling</title>
    <style>
        button.navbar-toggler:focus,
        button.navbar-toggler:active {
        outline: none;
        box-shadow: none;
    }
    button.navbar-toggler{
        border:none;
    }
    </style>
</head>
<body style="background-color:#01DEBD;">




    <div class="container-fluid">
        <div class="card" style="height:100vh !important;">

    <!-- navbar -->
            <nav class="navbar navbar-expand-lg  fixed-bottom navbar-dark " style="background-color:#1F2532;border-radius:12px;">
                <div class="container">
                    <span class="text-white navbar-brand"><img src="assets/Gambar/user.png" class=" rounded img-thumbnail img-fluid" style="border-radius:50px !important;" width="40px" alt=""> <?=$_SESSION['username'];?></span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span ><img src="https://img.icons8.com/parakeet/48/000000/experimental-console-parakeet.png"/></span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-flex justify-content-end " id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link" style="color:white;" href="perjalanan"><span><img width="30px" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-note-archaeology-flaticons-lineal-color-flat-icons-2.png"/></span> Tambah Catatan</a>
                        <a class="nav-link" style="color:white;" href="perjalanan/lihat.php"><span><img width="28px" src="https://img.icons8.com/bubbles/50/000000/view-file.png"/></span> Lihat Catatan</a>
                        <a class="nav-link"   style="color:white;" href="logout.php"><span><img src="https://img.icons8.com/external-sbts2018-lineal-color-sbts2018/58/000000/external-logout-social-media-sbts2018-lineal-color-sbts2018.png" width="28px"/></span> Logout</a>
                </div>
                    </div>
                </div>
            </nav>
    <!-- end navbar -->

<!-- Bagian Content -->
   <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="assets/Gambar/user.png" width="50px" alt="">
            </div>
            <div class="col-6">
                <ul>
                    <li>Perjalanan : 0</li>
                    <li>Edit profile</li>
                </ul>
            </div>
        </div>
   </div>
<!-- end content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>