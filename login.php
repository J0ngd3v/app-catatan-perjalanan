<?php
session_start();
include "config.php"; 
if(isset($_POST['login'])){
    $nik = mysqli_real_escape_string($konek , $_POST['nik']);
    $username = mysqli_real_escape_string($konek , $_POST['username']);


    $query = "SELECT * FROM pengguna WHERE nik='$nik' AND username='$username' ";
    $login = mysqli_query($konek , $query);
    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['nik_user'] = $nik;
        header("location: index.php");
    }else{
        echo "<script>alert('salah bos')</script>";
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
  </head>
  <body style="background-image: url(assets/Gambar/bg.jpg) !important;opacity:0.9; background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed ;">
    <div class="container" style="display:flex;height:100vh;width:100%;justify-content:center;align-items:center;">
        <div class="card" style="padding:70px;border-radius:10px;border:none;-webkit-box-shadow:0px 10px 39px 10px rgba(33,33,33,0.22);
-moz-box-shadow: 0px 10px 39px 10px rgba(33,33,33,0.22);
box-shadow: 0px 10px 39px 10px rgba(33,33,33,0.22);">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-label" style="font-weight:500;" for="nik" >NIK</label>
                        <input class="form-control" type="number" name="nik" min="0" id="nik" placeholder="NIK" style="border-radius:12px;padding:7px;">
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" style="font-weight:500;" for="Username">Username</label>
                        <input class="form-control" type="username" name="username" id="Username" placeholder="Username" style="border-radius:12px;">
                    </div>
                    <div class="d-grid gap-2">
                        <button  name="login" class="btn btn-primary mt-3">Login</button>
                        
                    </div>
                   <a href="lupa.php">Lupa Password?</a>
                    <span style="font-weight:bold;">|</span>
                   <a href="registrasi.php">Regristasi</a>
                </form>
          
        </div>
        <div class="footer fixed-bottom d-flex justify-content-center">
            <footer>
                <p style="background-color:#01DEBD;padding:5px;border-radius:5px;color:white;">Copyright <?= date('Y')?> by JongDev</p>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>