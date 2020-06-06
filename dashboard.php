<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'navbar.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"><a href="#" style="text-decoration: none;">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        2
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"><a href="kelas.php?praktik=access" style="text-decoration: none;">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendapatan bulan ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        Rp 22.000
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"><a href="perusahaan.php?perusahaan=access" style="text-decoration: none;">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">terjual</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            2
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"><a href="dashboard-pesanan.php" style="text-decoration: none;">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       1
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="mt-2 fas fa-user-clock fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <!-- Content Row -->
          <div id="table" class="card shadow border-left-primary mb-4 mt-2">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body pt-2">
              <div class="table-responsive mt-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Status Promo</th>
                      <th>Harga</th>
                      <th>Status Ketersediaan</th>
                      <th>Stok</th>
                      <th>Terjual</th>
                      <th>Deskripsi</th>
                      <th class="text-center">#</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Status Promo</th>
                      <th>Harga</th>
                      <th>Status Ketersediaan</th>
                      <th>Stok</th>
                      <th>Terjual</th>
                      <th>Deskripsi</th>
                      <th class="text-center">#</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>
                        <img style="width: 30px; vertical-align: text-top;" src="images/kendang.png">
                        Kendang
                      </td>
                      <td>Alat musik</td>
                      <td>Ya</td>
                      <td>Rp 11.000</td>
                      <td>Ada</td>
                      <td>1259</td>
                      <td>1</td>
                      <td><button class="btn btn-outline-secondary">...</button></td>
                      <td class="text-center"><i class="fas fa-trash text-danger"></i><i class="ml-3 fas fa-pen text-danger"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <img style="width: 30px; vertical-align: text-top;" src="images/angklung.png">
                        Angklung
                      </td>
                      <td>Alat musik</td>
                      <td>Ya</td>
                      <td>Rp 89.000</td>
                      <td>Ada</td>
                      <td>159</td>
                      <td>1</td>
                      <td><button class="btn btn-outline-secondary">...</button></td>
                      <td class="text-center"><i class="fas fa-trash text-danger"></i><i class="ml-3 fas fa-pen text-danger"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Alma Prayuda semoga dapet jodoh yang baik Aamiin</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
