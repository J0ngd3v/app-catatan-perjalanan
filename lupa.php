<?php
if(isset($_POST['lupa'])){
    $nik = $_POST['nik'];
    header("location: https://wa.me/+6281225599141?text=Saya Lupa password dengan nik $nik , tolong di reset password saya. Terima Kasih");

}
include "config.php";
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
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="form-label" style="font-weight:500;" for="nik">NIK</label>
                        <input class="form-control" type="number" name="nik" id="nik" placeholder="NIK">
                    </div>
                    <div class="d-grid gap-2">
                        <button name="lupa" class="btn btn-primary mt-3">Lupa</button>
                        
                    </div>
                   <a href="login.php">Sudah Ingat?</a> 
                </form>
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>