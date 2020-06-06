<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(rgb(0, 0, 0, .9), rgb(0, 0, 0, .8));">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="font-family: segoe script;;">RUANG</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pembimbing" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-cog"></i>
          <span>Pembimbing</span>
        </a>
        <div id="pembimbing" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="settings.php">Akun Saya</a>
            <a class="collapse-item" href="pembimbing.php">Tambah Pembimbing</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kelas" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-school"></i>
          <span>Kelas</span>
        </a>
        <div id="kelas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="kelas.php?jurusan=access">Jurusan</a>
            <a class="collapse-item" href="kelas.php?murid=access">Data Murid</a>
            <a class="collapse-item" href="kelas.php?praktik=access">Data Praktik</a>
            <a class="collapse-item" href="kelas.php?pending=access">Data Pending</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="far fa-building"></i>
          <span>Perusahaan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="perusahaan.php?perusahaan=access">Perusahaan</a>
            <a class="collapse-item" href="perusahaan.php?pending=access">Data Pengajuan</a>
            <a class="collapse-item" href="perusahaan.php?praktik=access">Data Praktik</a>
            <a class="collapse-item" href="perusahaan.php?kasus=access">Data Kasus</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Lainnya
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-bullhorn rotate-n-15"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="sertifikat.php">Penerima Sertifikat</a>
            <a class="collapse-item" href="locked.php">Akun terblokir</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block mb-0">

      <li class="nav-item">
        <a class="nav-link collapsed" style="text-align: center;" href="info.php">
          <span><small><i class="fas fa-info"></i>&nbsp;&nbsp;</small>version<br></span>
        </a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button><br>
      </div>

    </ul>