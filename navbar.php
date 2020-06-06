<style type="text/css">
  .anotif:hover{
    background: #e6e6e6!important;
  }

  .get_popup {
    transition: 2s  ;
    animation: success 5s;
    top: 9999999px;
  }

  @keyframes success {
    0% {top: 200px; opacity: 1}
    50% {top :200px; opacity: 1;}
    100% {top :200px; opacity: 0;}
  }
</style>

<?php
    if (isset($_GET['success'])) {
        $success = $_GET['success'];
    }else{
        $success = "";
    }

    if (isset($_GET['failed'])) {
        $failed = $_GET['failed'];
    }else{
        $failed = "";
    }

    if ($success) {
      echo "
        <div class='get_popup' style='width: 200px; height: 200px; border-radius: 50%; background-image: linear-gradient(rgb(40, 167, 69, .8), rgb(40, 167, 69, .8)); display: inline-block; color: white; position: fixed; z-index: 99; left: 45%;'>
          <i class='fas fa-check' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px'></i>
        </div>
      ";
    }elseif ($failed) {
      echo "
        <div class='get_popup' style='width: 200px; height: 200px; border-radius: 50%; background-image: linear-gradient(rgb(220, 53, 69, .8), rgb(220, 53, 69, .8)); display: inline-block; color: white; position: fixed; z-index: 99; left: 45%;'>
          <i class='fas fa-times' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px'></i>
        </div>
      ";
    }
  ?>
 
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" style="height: 40px;" class="form-control bg-light border-0 small" placeholder="Cari data" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" style="width: 50px" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari jodoh" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
              </a>
              <!-- Dropdown - Alerts -->
              <div style="max-height: 350px; overflow-y: auto; overflow-x: hidden; width: 25rem!important; border-bottom: 0.5px solid #c9c9c9;" class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  N o t i f i k a s i
                </h6>
                <div class="row small text-center text-gray-700">
                  <div class="col">
                    <a style="" href="../config/readtif.php">Tandai telah dibaca</a>
                  </div>-
                  <div class="col">
                    <a onclick="return confirm('Seluruh notifikasi akan dihapus, yakin ?')" style="" href="../config/deltif.php">Hapus semua notifikasi</a>
                  </div>
                </div>

                  <?php include '../config/koneksi.php';
                    $pesan = mysqli_query($koneksi, "SELECT * FROM notif where `untuk` = '$code'");
                      while ($fetch = mysqli_fetch_assoc($pesan)) {
                        if ($fetch['jumlah'] == "1") {
                          echo "
                              <div data-target='#navpengajuan".$fetch['id_dari']."' data-toggle='modal' class='row p-2 anotif' style='cursor: pointer; background-image: linear-gradient(rgb(43, 157, 214, .3), rgb(43, 157, 214, .3)); height: auto; border-top: 0.3px solid #ccc;'>
                                <div class='col-2' style='vertical-align: middle;'>
                                  <img src='../images/userimg/".$fetch['img']."' style='object-fit: cover; border-radius: 50%; padding: 0px; object-position: center 0px; width: 40px; height: 40px; margin-top: 10px; margin-left: 2px;' />
                                </div>
                                <div class='col pl-0'>
                                  <p class='small text-gray-700 mb-0'>".ucfirst($fetch['waktu'])."</p>
                                  <p class='mb-1 text-gray-800' style='font-size: 13px; font-weight: bolder; font-family: Arial, sans-serif'>".ucfirst($fetch['nama_dari'])."</p>
                                  <p style='margin-bottom: 0; padding-bottom: 5px; font-size: 12px; line-height: 10px; white-space: nowrap; max-width: 320px; overflow: hidden; text-overflow: ellipsis; color: black;'>".ucfirst($fetch['pesan'])."</p>
                                </div>
                              </div>
                          ";
                        }else{
                          echo "
                              <div class='row p-2 anotif' data-target='#navpengajuan".$fetch['id_dari']."' data-toggle='modal' style='cursor: pointer; height: auto; border-top: 0.3px solid #ccc;'>
                                <div class='col-2' style='vertical-align: middle;'>
                                  <img src='../images/userimg/".$fetch['img']."' style='object-fit: cover; border-radius: 50%; padding: 0px; object-position: center 0px; width: 40px; height: 40px; margin-top: 10px; margin-left: 2px;' />
                                </div>
                                <div class='col pl-0'>
                                  <p class='small text-gray-700 mb-0'>".ucfirst($fetch['waktu'])."</p>
                                  <p class='mb-1 text-gray-800' style='font-size: 13px; font-weight: bolder; font-family: Arial, sans-serif'>".ucfirst($fetch['nama_dari'])."</p>
                                  <p style='margin-bottom: 0; padding-bottom: 5px; font-size: 12px; line-height: 10px; white-space: nowrap; max-width: 320px; overflow: hidden; text-overflow: ellipsis; color: black;'>".ucfirst($fetch['pesan'])."</p>
                                </div>
                              </div>
                          ";
                        }
                      }
                  ?>
              </div>
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Alma Prayuda</small>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="images/user-i.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../config/clogout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>