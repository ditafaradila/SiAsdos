<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Asisten Dosen</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Asdos</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- Nav Item - User Information -->
      <li class="nav-item">
        <a class="nav-link" href="/AsProfile">
          <img class="img-profile rounded-circle" src="/assets/AdminLTE/dist/img/userr.png">
          <span class="" <?= session()->get('nama'); ?>>Dita Faradila</span>

        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="/Ashome">
          <i class="fas fa-calendar"></i>
          <span>Jadwal</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/materi">
          <i class="fas fa-bell"></i>
          <span>Materi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/pengumumanAsdos">
          <i class="fas fa-bell"></i>
          <span>Pengumuman</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="/Nilai">
          <i class="fas fa-tasks"></i>
          <span>Nilai</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/CAbsen">
          <i class="fas fa-list-alt"></i>
          <span>Absensi Asisten Dosen</span>
        </a>
      </li>

      <li class="nav-item" align="center">
        <a class="btn btn-danger" href="<?= base_url(); ?>/logoutAs" style="position: absolute; left: 70px; top: 150px;">
          <i class="fa fa-power-off"></i>
          Logout
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

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div class="content-wrapper">
        <div class="container">
          <?= $this->renderSection('content') ?>
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
