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

    <title>Login | My Note Travel</title>
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
<?php if(isset($_SESSION['message'])){ ?>
        <script>
            swal("<?=$_SESSION['message']?>", "Silahkan Masukkan Username dan Nik dengan Benar", "error");
        </script>
    <?php unset($_SESSION['message']); }elseif(isset($_SESSION['success'])){ ?>
        <script>
            swal("<?=$_SESSION['success']?>", "Berhasil Mendaftar Silahkan login", "success");
        </script>
    <?php unset($_SESSION['success']);}?>
<!-- End Pesan -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card animate__animated animate__fadeIn">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img width="240px" src="assets/gambar/travel.png" alt="">
                  </span>
                  
                </a>
              </div>
              <!-- /Logo -->
              
              <form id="formAuthentication" class="mb-3" action="Controller/proses_masuk.php" method="POST">
                <div class="mb-3">
                  <label for="nik" class="form-label">Nomer Induk (NIK)</label>
                  <input
                    type="number"
                    class="form-control"
                    id="nik"
                    name="nik"
                    placeholder="Enter Your NIK"
                    autofocus
                    style="padding:10px !important;"
                    
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="username">Username</label>
                    <a href="lupa.php">
                      <small>Forgot Username ?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      id="username"
                      class="form-control"
                      name="username"
                      placeholder="Enter Your Username"
                      style="padding:10px !important;"
                      
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary mb-2 d-grid w-100" type="submit" name="login">LOG IN</button>
                 <a href="daftar.php" class="btn btn-warning  d-grid w-100">REGISTRASI</a> 
                </div>
              </form>

              
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="dashboard/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="dashboard/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
