<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="dashboard/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Register | My Note Travel</title>
    <link rel="icon" type="image/x-icon" href="assets/gambar/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="dashboard/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dashboard/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dashboard/assets/css/demo.css" />
    <link rel="stylesheet" href="dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="dashboard/assets/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="<?=$sweetcss?>">
    <script src="<?=$sweetjs?>"></script>
    <script src="dashboard/assets/vendor/js/helpers.js"></script>
    <script src="dashboard/assets/js/config.js"></script>
  </head>

  <body>
    
  <!-- Pesan Sweet -->
  <?php if(isset($_SESSION['error'])){ ?>
        <script>
            swal("<?=$_SESSION['error']?>", "Daftar Ulang atau Hubungi Admin", "error");
        </script>
    <?php unset($_SESSION['error']); } ?>
<!-- End Pesan -->


    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card animate__animated animate__fadeIn">
            <div class="card-body">
              <!-- Logo -->
            
              <!-- /Logo -->
              
              <form id="formAuthentication" class="mb-3" action="Controller/proses_tambah.php" method="POST">
                <div class="mb-3">
                  <label for="nik" class="form-label"><span style="color:red; font-size:18px;">*</span> Nomer Induk (NIK)</label>
                  <input required type="number" class="form-control" id="nik" name="nik" placeholder="Ente Your NIK" autofocus style="padding:10px !important;"/>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="username"><span style="color:red; font-size:18px;">*</span> Username</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input required type="text" id="username" class="form-control" name="username" placeholder="Enter Your Username" style="padding:10px !important;"/>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label"><span style="color:red; font-size:18px;">*</span> Jenis Kelamin</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="">-- Pilih Gender --</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir" class="form-label"><span style="color:red; font-size:18px;">*</span> Tanggal Lahir</label>
                  <input required type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" style="padding:10px !important;"/>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label"><span style="color:red; font-size:18px;">*</span> Alamat/Tempat</label>
                  <input required type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Your alamat" autofocus style="padding:10px !important;"/>
                </div>
                <div class="mb-3">
                  <input hidden required type="text" class="form-control" value="pengguna"  name="role" style="padding:10px !important;"/>
                </div>
                <input required type="hidden" class="form-control"  name="warna"/>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" name="regist">Regristasi</button>
                </div>
              </form>

              
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- animasi hello -->
<div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a href=""><img width="120px" src="assets/gambar/travel.png" alt="jongnesia.com"></a></div>
<!-- end animasi hello -->

    <script src="dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboard/assets/vendor/js/menu.js"></script>
    <script src="dashboard/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
