<?php
session_start();
include "../config.php";
// Cek Session Login
if(!isset($_SESSION['login'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets" data-template="vertical-menu-template-free">
<?php require "partials/header.php"?>
<body>
  <div class="alert alert-primary fixed-top" role="alert" style="z-index:99999;padding-top:2px; padding-bottom:2px;">
    <p style="margin-top:8px; margin-bottom:3px;font-size:12px;"><span><img width="25px" src="../assets/gambar/toa.png" alt=""></span> Promosi : Kunjungi Website Saya Jongnesia.com</p>
  </div>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- sidebar -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="margin-top:25px;">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img width="170px" src="../assets/gambar/travel.png" alt="">
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="create.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Create Travel</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>My Travel</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="laksana.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div> Sharing Travel
                </div>
              </a>
            </li>
            <!-- Layouts -->
            
          </ul>
        </aside>
        <!-- end sidebar -->
        <div class="layout-page">
          <!-- navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar" style="margin-top:50px;">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?=$_SESSION['username']?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2">Logout</i>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- endnavbar -->

    
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                 <?php
                    $nik = $_SESSION['nik_user'];
                    $query = "SELECT * FROM perjalanan WHERE nik_user=$nik";     
                    $result = mysqli_query($konek , $query);
                 ?>
                 <?php while($hasil = mysqli_fetch_assoc($result)){?>
                  <div class="col-md-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                  <!-- Modal -->
                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel"><?=$hasil['judul'];?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
    
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end modal -->
                                  <!-- edit data -->
                              <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Perjalanan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                       
                                        <form action="../Controller/proses_edit.php?id=<?=$hasil['id_perjalanan'];?>" method="POST">
                                              <div class="form-group mt-2">
                                                <label for="">Judul</label>
                                                <input name="judul" type="text" class="form-control" value="<?=$hasil['judul'];?>">
                                              </div>
                                              <div class="form-group mt-2">
                                                <label for="">Suhu</label>
                                                <input name="suhu" type="text" class="form-control" value="<?=$hasil['suhu'];?>">
                                              </div>
                                              <div class="form-group mt-2">
                                                <label for="">Lokasi</label>
                                                <input name="lokasi" type="text" class="form-control" value="<?=$hasil['lokasi'];?>">
                                              </div>
                                              <div class="form-group mt-2">
                                                <label for="">Keterangan</label>
                                                <textarea name="keterangan" id="" cols="30" rows="6" class="form-control" ><?=$hasil['keterangan'];?></textarea>
                                              </div>
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" name="edit">Edit Perjalanan</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <!-- end edit -->
                                <img style="border-radius:15px; " src="../assets/gambar/user/thumb/<?=$hasil['gambar'];?>" alt="" width="280px">
                                <p class="mt-2">Pada : <?=$hasil['tanggal'];?> , <?=$hasil['jam'];?></p>
                                <p style="margin-top:-23px;">Suhu : <?=$hasil['suhu'];?></p>
                                <p style="margin-top:-23px;">Lokasi : <?=$hasil['lokasi'];?></p>
                                <h5><?=$hasil['judul'];?>... <br> <a  href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Baca Selengkapnya</a></h5>
                                <a href="../Controller/proses_hapus.php?id=<?=$hasil['id_perjalanan'];?>">
                                    <img src="../assets/gambar/hapus.png" alt=""> <span>Hapus</span>
                                </a>
                                <a href="mynote.php?id=<?=$hasil['id_perjalanan'];?>"  >
                                    <img src="../assets/gambar/edit.svg" alt=""> <span>Edit</span>
                                </a>
                                <a href="">
                                    <img src="../assets/gambar/share.svg" alt=""> <span>Share</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
              </div>


            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>

      
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
  <!-- Pesan Sweet -->
  <?php if(isset($_SESSION['edit_sukses'])){ ?>
        <script>
            swal("Berhasil", "Sukses Mengedit Data Perjalanan", "success");
        </script>
    <?php unset($_SESSION['edit_sukses']); } ?>
<!-- End Pesan -->
<?php require "partials/footer.php"; ?>
  </body>
</html>