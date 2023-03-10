<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$data['judul']?></title>
  <link rel="stylesheet" href="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/css/styles.css">
  
  <link href="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>

<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=BASEURL;?>">
        <div class="sidebar-brand-text mx-3">SPP Managements</div>
    </a>

    <!-- Divider -->
    

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  active mt-4">
        <a class="nav-link" href="<?=BASEURL?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Form</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Form Management</h6>
                <a class="collapse-item" href="<?=BASEURL;?>Kelas">Data Kelas</a>
                <a class="collapse-item" href="<?=BASEURL;?>Siswa">Data Siswa</a>
                <a class="collapse-item" href="forgot-password.html">Data Petugas</a>
                <a class="collapse-item" href="register.html">Data Pengguna</a>
                <a class="collapse-item" href="blank.html">Tahun Ajaran</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item ">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Entri Transaksi</span></a>
    </li>
    
    <li class="nav-item ">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>History</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item  mb-4">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block mb-4">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->




  
