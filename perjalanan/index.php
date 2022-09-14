<?php

session_start();
include "../config.php";
if(!isset($_SESSION['login'])){
    header("location: ../login.php");
}

if(isset($_POST['submit'])){
    $nik = $_SESSION['nik_user'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $suhu = $_POST['suhu'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO `perjalanan` (`id_perjalanan`, `nik_user`, `jam`, `lokasi`, `tanggal`, `suhu`, `keterangan`) VALUES (NULL,' $nik' ,' $jam ', '$lokasi',' $tanggal', '$suhu',' $keterangan')";
    $kirim = mysqli_query($konek , $query);
    
    if($kirim){
       echo "<script>alert('berhasil tambah')</script>";
       
   }else{
       echo "<script>alert('gagal tambah')</script>";
   }
}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="<?= $css ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <body style="background-color:#01DEBD;height:100vh;">
    
    <div class="container-fluid">
        <div class="card" style="height:100vh !important;">
            <nav class="navbar navbar-expand-lg  fixed-bottom navbar-dark " style="background-color:#1F2532;border-radius:12px;">
                <div class="container">
                    <span class="text-white navbar-brand"><img src="../assets/Gambar/user.png" class=" rounded img-thumbnail img-fluid" style="border-radius:50px !important;" width="40px" alt=""> <?=$_SESSION['username'];?></span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span ><img src="https://img.icons8.com/parakeet/48/000000/experimental-console-parakeet.png"/></span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-flex justify-content-end " id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link"   style="color:white;" href="../index.php"><span><img src="https://img.icons8.com/office/30/228BE6/home--v1.png" width="24px"/></span> Home</a>
                        <!-- <a class="nav-link" style="color:white;" href="#"><span><img width="30px" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-note-archaeology-flaticons-lineal-color-flat-icons-2.png"/></span> Tambah Catatan</a> -->
                        <a class="nav-link" style="color:white;" href="lihat.php"><span><img width="28px" src="https://img.icons8.com/bubbles/50/000000/view-file.png"/></span> Lihat Catatan</a>
                        <a class="nav-link"   style="color:white;" href="../logout.php"><span><img src="https://img.icons8.com/external-sbts2018-lineal-color-sbts2018/58/000000/external-logout-social-media-sbts2018-lineal-color-sbts2018.png" width="28px"/></span> Logout</a>
                </div>
                    </div>
                </div>
            </nav>
            <!-- Bagian Content -->
            <div class="container custome">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center mt-3 mb-5">
                        <h2>Tambah Data Catatan</h2>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="row d-flex justify-content-center" >
                        <div class="col-lg-5">
                            <div class="form-group mt-2">
                              <label  style="font-weight:bold" class="form-label" for="jam">Jam</label>
                              <input class="form-control" type="time" name="jam" id="jam">
                            </div>
                            <div class="form-group mt-2">
                                <label style="font-weight:bold" for="lokasi" class="form-label">Lokasi</label>
                                <input class="form-control" type="text" name="lokasi" id="lokasi">
                            </div>
                            <div class="form-group mt-2">
                                <label style="font-weight:bold" for="tanggal" class="form-label">Tanggal</label>
                              <input class="form-control" type="date" name="tanggal" id="tanggal">
                            </div>
                            <div class="form-group mt-2">
                                <label style="font-weight:bold" for="suhu" class="form-label">Suhu</label>
                              <input class="form-control" type="number" name="suhu" id="suhu">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-2">
                                <label style="font-weight:bold" for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="keterangan" cols="10" rows="5"></textarea>
                                <div class="d-grid gap-2 mt-2">
                                    <button name="submit" class="btn btn-primary" >Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>