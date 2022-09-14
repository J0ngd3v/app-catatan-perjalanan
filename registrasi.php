<?php
session_start();
include "config.php"; 
if(isset($_POST['submit'])){
    $nik = $_POST['nik'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    
    $query = "INSERT INTO pengguna VALUES ('$nik', '$username', '$gender', '$tanggal_lahir', '$alamat')";
    $tambah = mysqli_query($konek , $query);
    if(!mysqli_num_rows($tambah) > 0){
        header("location: login.php");
    }else{
        echo "<script>alert('gagal regristasi')</script>";
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
        <div class="card" style="padding:20px 70px 20px 70px;border-radius:10px;border:none;-webkit-box-shadow:0px 10px 39px 10px rgba(33,33,33,0.22);
-moz-box-shadow: 0px 10px 39px 10px rgba(33,33,33,0.22);
box-shadow: 0px 10px 39px 10px rgba(33,33,33,0.22);">
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="form-label" style="font-weight:500;" for="nik">NIK</label>
                        <input class="form-control" type="text" name="nik" id="nik" maxlength="16" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-weight:500;" for="username">Username</label>
                        <input class="form-control" type="username" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-weight:500;" for="gender">Gender</label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="">-- Jenis Kelamin --</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                            <option value="banci">Banci</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" style="font-weight:500;" for="tgl">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" id="tgl">
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" style="font-weight:500;" for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="2"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary mt-1" name="submit">Regristasi</button>
                        
                    </div>
                   <a href="login.php">Sudah Punya Akun?</a>
                </form>
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>