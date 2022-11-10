<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>
<?php include('../filter_search.php'); ?>

<?php
// DATA QUERY FROM DATABASE

$connect = mysqli_connect("localhost", "root", "", "sicstelkom");
$batas = isset($_GET['dataTables_length']) ? $entry : 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($connect, "select * from calling");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$nomor = $halaman_awal + 1;

// SEARCH FEATURE

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['searchValue'];

    // Jika search value kosong, tidak ada atau empty string
    if ($valueToSearch == "") {
        $query = "select * from calling limit $halaman_awal, $batas";
    } else {
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `calling` WHERE CONCAT(`no. internet`, `nama user call`, `nama customer call`, `contact person`) LIKE '%" . $valueToSearch . "%'";
    }
    $data_pegawai = filterTable($query);
} else {
    $query = "select * from calling limit $halaman_awal, $batas";
    $data_pegawai = filterTable($query);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Calling </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Calling Customer</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-boostrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>
                                    <form action="datacalling.php" method="POST">
                                        Search:
                                        <input type="search" name="searchValue" class="form-control form-control-sm" placeholder aria-controls="dataTable">
                                        <input type="submit" name="search" class="form-control form-control-sm" placeholder aria-controls="dataTable">
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
                                        <th class="sorting sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No Id: activate to sort column ascending" style="width: 161px;" aria-sort="descending">No Internet ID</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Tools: activate to sort column ascending">Nama Customer </th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="usercall: activate to sort column ascending">Nama User Call</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Tools: activate to sort column ascending">Hasil call</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">No Internet ID</th>
                                        <th rowspan="1" colspan="1">Nama User Call</th>
                                        <th rowspan="1" colspan="1">Nama Customer</th>
                                        <th rowspan="1" colspan="1">Hasil call</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!-- php loop semua data yang ada di dalam database table -->
                                    <?php
                                    while ($row = mysqli_fetch_array($data_pegawai)) : ?>
                                        <tr class="even">
                                            <?php $id = $row['no. internet'] ?>
                                            <!-- Nama field database yang akan ditunjukan -->
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $row['nama user call']; ?></td>
                                            <td><?php echo $row['nama customer call']; ?></td>
                                            <td><?php echo $row['hasil call']; ?></td>
                                            <td>
                                                <a <?php echo "href='detail.php?calling=$id'"; ?>  class="btn btn-primary btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a <?php echo "href='editcalling.php?calling=$id'"; ?> class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-marker"></i>
                                                </a>
                                                <a <?php echo "href='hapusdatacalling.php?hapuscalling=$id'"; ?> class="btn btn-danger btn-circle btn-sm">
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
                                        <a aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link" <?php if ($halaman < $total_halaman) echo "halaman=$next'" ?>> Next </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                    <?php include('../admin/template/footer.php'); ?>