<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE | User Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  @stack('css')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link btn btn-block btn-outline-primary mx-2" data-toggle="dropdown" href="/login">
          Login
          <button type="button" class="btn btn-block btn-outline-primary">Primary</button> 
          <i class="far"></i>
          <span class="badge navbar-badge"></span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="#" role="button">
          <i class="fas"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" role="button">
          <i class="fas"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" role="button">
          <i class="fas"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WIKIndonesia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="mb-3 d-flex">
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/tags" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tags 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Tema
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tema/artikel" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Artikel</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/film" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Film</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/fitness" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fitness</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/kesehatan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kesehatan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/kuliner" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kuliner</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/otomotif" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Otomotif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/resep-masakan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Resep Masakan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tema/traveling" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Traveling</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Login
                <i class="right fas"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>
</body>
</html>
