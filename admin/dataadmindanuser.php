<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// DATA QUERY FROM DATABASE
$connect = mysqli_connect("localhost", "root", "", "sicstelkom");
$batas = isset($_GET['dataTables_length']) ? $entry : 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM admin");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$nomor = $halaman_awal + 1;

// SEARCH FEATURE
if (isset($_POST['search'])) {
    $valueToSearch = $_POST['searchValue'];

    // Jika search value kosong, tidak ada atau empty string
    if ($valueToSearch == "") {
        // Maka query semua data
        $query = "select * from admin limit $halaman_awal, $batas";
    } else {
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `admin` WHERE CONCAT(`user_id`, `username`, `password`, `nama_lengkap`) LIKE '%" . $valueToSearch . "%'";
    }

    $data_pegawai = filterTable($query);
} else {
    $query = "select * from admin limit $halaman_awal, $batas";
    $data_pegawai = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sicstelkom");

    if ($connect->connect_error) {
        echo "koneksi database gagal: " . mysqli_connect_error();
        die;
    } else {
        $filter_Result = mysqli_query($connect, $query);
        // $result = mysqli_fetch_array($filter_Result);
        return $filter_Result;
    }
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Admin</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-boostrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>
                                    <form action="dataadmindanuser.php" method="POST">
                                        Search:
                                        <input type="search" name="searchValue" class="form-control form-control-sm" placeholder aria-controls="dataTable">
                                        <button class="btn btn-outline-primary" type="submit" name="search">Search</button>
                                    </form>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="userid: activate to sort column ascending" style="width: 161px;" aria-sort="descending">User ID</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Username</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Password: activate to sort column ascending">Password</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Fullname: activate to sort column ascending">Fullname</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="tools: activate to sort column ascending">Tools</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">User ID</th>
                                        <th rowspan="1" colspan="1">Username</th>
                                        <th rowspan="1" colspan="1">Password</th>
                                        <th rowspan="1" colspan="1">Fullname</th>
                                        <th rowspan="1" colspan="1">Tools</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!-- php loop semua data yang ada di dalam database table -->
                                    <?php
                                    while ($row = mysqli_fetch_array($data_pegawai)) : ?>
                                        <tr class="even">
                                            <?php $id = $row['user_id'] ?>
                                            <!-- Nama field database yang akan ditunjukan -->
                                            <td><?php echo $row['user_id']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td class="sorting_1"><?php echo $row['nama_lengkap']; ?></td>
                                            <td>
                                                <a <?php echo "href='hapusdataadmin.php?hapusadmin=$id'"; ?> class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                <?php echo "Showing 1 to 10 of $jumlah_data entries" ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <!-- PREVIOUS BUTTON -->
                                    <li id="dataTable_previous" class="paginate_button page-item previous
                                    <!-- jika halaman = 1 (halaman awal) maka disable button previous -->
                                     <?php if ($halaman == 1) echo "disabled" ?> ">
                                        <a <?php if ($halaman > 1) echo "href='?halaman=$previous'"; ?> aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"> Previous </a>
                                    </li>

                                    <!-- PAGINATION NUMBER -->
                                    
                                    <?php
                                    // loop halaman 
                                    for ($i = 1; $i <= $total_halaman; $i++) {
                                    ?>
                                        <li class="paginate_button page-item 
                                        <?php if ($halaman == $i) echo "active" ?>">
                                            <a href="?halaman=<?php echo $i ?>" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">
                                                <?php echo $i ?>
                                            </a>
                                        </li>

                                    <?php } ?>

                                    <!-- NEXT BUTTON -->
                                    <li id="dataTable_next" class="paginate_button page-item next 
                                    <!-- jika halaman = total halaman (halaman terakhir) maka disable button next -->
                                    <?php if ($halaman == $total_halaman) echo "disabled"; ?> ">
                                        <a aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link" 
                                        <?php if ($halaman < $total_halaman) echo "halaman=$next'" ?>> Next </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                    <?php include('../admin/template/footer.php'); ?>