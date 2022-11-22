<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN</title>

  <!-- Custom fonts for this template-->
  <link href="/assetsadmin/adminstart/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/assetsadmin/adminstart/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin ASDOS</div>
      </a>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider my-0"> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">

      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-calendar"></i>
          <span>Jadwal</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Jadwal</h6>
            <a class="collapse-item" href="/home">Jadwal Asdos</a>
            <a class="collapse-item" href="/jadwalPiket">Jadwal Piket</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-bell"></i>
          <span>Pengumuman</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengumuman</h6>
            <a class="collapse-item" href="/pengumuman">Pengumuman Asdos</a>
            <a class="collapse-item" href="/pengumumanLain">Pengumuman Lainnya</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-list-alt"></i>
          <span>Absen</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rekapan Absen</h6>
            <a class="collapse-item" href="/absen">Absen Asdos</a>
            <a class="collapse-item" href="/absenMhs">Absen Mahasiswa</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/pendaftarAsdos">
          <i class="fas fa-book"></i>
          <span>Pendaftaran Asdos</span>
        </a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


    </ul>
    <!-- End of Sidebar -->


    <!-- Main Content -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div class="content-wrapper">
        <div class="container">
          <?= $this->renderSection('content') ?>
        </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assetsadmin/adminstart/vendor/jquery/jquery.min.js"></script>
    <script src="/assetsadmin/adminstart/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assetsadmin/adminstart/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assetsadmin/adminstart/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assetsadmin/adminstart/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assetsadmin/adminstart/js/demo/chart-area-demo.js"></script>
    <script src="/assetsadmin/adminstart/js/demo/chart-pie-demo.js"></script>
    <script>
      $(function() {
        $('#deskripsi').summernote()
      })
    </script>
</body>

</html>
