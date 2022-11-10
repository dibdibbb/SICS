
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SICSTelkom</title>

    <!-- gambar title -->
    <link rel="icon" type= "image/png" href="../asset/img/logotelkom.png">

    <!-- Custom fonts for this template-->
    <link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="semuakaryawan.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">APS - SISTEM</sup></div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                Dashboard
            </div>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

             <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                <a class= "nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataCustomer" aria-expanded="false" aria-controls="collaseDataCustomer">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Customer</span>
                    </a>    
                    <div id="collapseDataCustomer" class="collapse" aria-labelledby="headingDataCustomer" data-parent="#accordionSidebar" style>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Customer:</h6>
                        <a class="collapse-item" href="datacustomer.php">Customer</a>
                        <a class="collapse-item" href="tambahcustomer.php">Tambah Customer</a>

                        </li>
            
<!-- Divider -->
    <hr class="sidebar-divider my-0">
            
    <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class= "nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataCalling" aria-expanded="false" aria-controls="collaseDataCalling">
                    <i class="fas fa-fw fa-phone"></i>
<span>Data Calling</span>
</a>    
<div id="collapseDataCalling" class="collapse" aria-labelledby="headingDataCalling" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Calling:</h6>
        <a class="collapse-item" href="datacalling.php">Data Calling</a>
        <a class="collapse-item" href="tambahcalling.php">Tambah Calling</a>
            </li>
            
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class= "nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsCallingPromosi" aria-expanded="false" aria-controls="collasCallingPromosi">
                    <i class="fas fa-fw fa-clipboard-list"></i>

</i>
<span>Calling Promosi</span>
</a>    
<div id="collapsCallingPromosi" class="collapse" aria-labelledby="headinCallingPromosi" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Calling Promosi:</h6>
        <a class="collapse-item" href="callingpromosi.php">Naskah Calling Promosi</a>
            </li>
                        
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class= "nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataAdmindanUser" aria-expanded="false" aria-controls="collaseDataAdmindanUser">
                <i class="fas fa-fw fa-list-ul"></i>

</i>
<span>Data Admin dan User</span>
</a>    
<div id="collapseDataAdmindanUser" class="collapse" aria-labelledby="headingDataAdmindanUser" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Admin dan User:</h6>
        <a class="collapse-item" href="dataadmindanuser.php">Data Admin dan User</a>
        <a class="collapse-item" href="../register.php">Tambah Admin dan User</a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class= "nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOthers" aria-expanded="false" aria-controls="collaseOthers">
                    <i class="fas fa-fw fa-tachometer-alt">

</i>
<span>Others</span>
</a>    
<div id="collapseOthers" class="collapse" aria-labelledby="headingOthers" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Laporan:</h6>
        <a class="collapse-item" href="laporankeluhan.php">Laporan</a>
        <a class="collapse-item" href="formkeluhan.php">Form Keluhan</a>
        <a class="collapse-item" href="formberhentiberlangganan.php">Form Berhenti Langganan</a>
            </li>
                        
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../login.php">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="../asset/img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->