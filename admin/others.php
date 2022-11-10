<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Aplikasi karyawan</title>

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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.html">
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
                    <i class="fas fa-fw fa-tachometer-alt">

</i>
<span>Data Customer</span>
</a>    
<div id="collapseDataCustomer" class="collapse show" aria-labelledby="headingDataCustomer" data-parent="#accordionSidebar" style>
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
                    <i class="fas fa-fw fa-tachometer-alt">

</i>
<span>Data Calling</span>
</a>    
<div id="collapseDataCalling" class="collapse show" aria-labelledby="headingDataCalling" data-parent="#accordionSidebar" style>
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
                    <i class="fas fa-fw fa-tachometer-alt">

</i>
<span>Calling Promosi</span>
</a>    
<div id="collapsCallingPromosi" class="collapse show" aria-labelledby="headinCallingPromosi" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Calling Promosi:</h6>
        <a class="collapse-item" href="callingpromosi.php">Naskah Calling Promosi</a>
            </li>
                        
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class= "nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataAdmindanUser" aria-expanded="false" aria-controls="collaseDataAdmindanUser">
                    <i class="fas fa-fw fa-tachometer-alt">

</i>
<span>Data Admin dan User</span>
</a>    
<div id="collapseDataAdmindanUser" class="collapse show" aria-labelledby="headingDataAdmindanUser" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Admin dan User:</h6>
        <a class="collapse-item" href="dataadmindanuser.php">Data Admin dan User</a>
        <a class="collapse-item" href="tambahadmindanuser.php">Tambah Admin dan User</a>
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
<div id="collapseOthers" class="collapse show" aria-labelledby="headingOthers" data-parent="#accordionSidebar" style>
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Laporan:</h6>
        <a class="collapse-item" href="keluhan.php">Form Keluhan</a>
        <a class="collapse-item" href="berhentiberlangganan.php">Form Berhenti Berlangganan</a>
            </li>
                        
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle"
                                    src="../asset/img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="editprofile.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                         </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading --> 
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          INPUT DATA KARYAWAN
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NIK</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="nis" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">NIKES</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="nis" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Karyawan</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="nis" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Band Posisi</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Posisi</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
           

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="alamat" rows="3" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_telepon" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                <a href="index.html" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->



                        </li>

                    </ul>