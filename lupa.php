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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Pemulihan Akun</title>
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
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Forgot Password -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img width="80" src="gambar/ufa.png" alt="">
                  </span>
                  
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Lupa Akun Anda? 🔒</h4>
              <p class="mb-4">Masukkan NIK atau Username untuk melakukan pemulihan akun agar dapat digunakan kembali</p>
              <form id="formAuthentication" class="mb-3" action="Controller/proses_lupa.php" method="POST">
                <div class="mb-3">
                  <label for="akun" class="form-label">Nik/Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="akun"
                    name="akun"
                    placeholder="Enter your NIK/Username"
                    autofocus
                    required
                  />
                </div>
                <button class="btn btn-primary d-grid w-100" name="lupa">Pulihkan</button>
              </form>
              <div class="text-center">
                <a href="login.php" class="d-flex align-items-center justify-content-center">
                  <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                  Back to login
                </a>
              </div>
            </div>
          </div>
          <!-- /Forgot Password -->
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
