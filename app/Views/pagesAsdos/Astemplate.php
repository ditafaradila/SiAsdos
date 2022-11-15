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
        <div class="sidebar-brand-text mx-3">Asisten Dosen</div>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!-- <div class="image">
            <img src="/assets/AdminLTE/dist/img/rs.jpeg" class="img-circle elevation-2" alt="User Image">
          </div> -->
          <div class="info">
            <a href="/profile" class="d-block"><?= session()->get('nama'); ?></a>
          </div>
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
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
