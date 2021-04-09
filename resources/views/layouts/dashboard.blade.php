<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="vue-multiselect/dist/vue-multiselect.min.css">
  {{-- <link rel="shortcut icon" href="{{ asset('Image/Logo/favicon.png') }}"> --}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{-- <img src="{{ asset('Image/sc_logo_med_w.png') }}"  class="menuImage"/> --}}
        <span class="brand-text font-weight-light" style="font-size: 18px;">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <h3>{{ Auth::user()->name }}</h3>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <router-link to="/home" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt gscBank-Green"></i>
                  <p>
                    DashBoard
                  </p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/demo" class="nav-link">
                  <i class="nav-icon fas fa-university gscBank-Green"></i>
                  <p>
                    Manage Bank
                  </p>
                </router-link>
            </li>
          <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-power-off red"></i>

                    <p>{{ __('Logout') }}</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        {{-- <router-view :userglobaldata="{{ Auth::user() }}"></router-view> --}}
        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <div class=" row">
      <div class="col-6 text-left"><strong>Copyright &copy; 2021 <a href="{{ config('app.url', 'http://karbh.com/') }}">{{ config('app.name', 'Laravel') }}</a>.</strong> All rights reserved.</div>
      <div class="col-6 text-right"><strong style="align:right">Design & Developed By:- <a target="_blank" href="http://karbh.com/">Karbh It Solutions</a>.</strong></div>
    </div>
    

  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- All JS -->
<script src="js/app.js"></script>
</body>
</html>
