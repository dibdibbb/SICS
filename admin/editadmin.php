<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari admin_id = $_GET['admin'];
$get_data = mysqli_query($koneksi, "SELECT * FROM admin WHERE `no. internet` = $admin_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$admin_name = $row['nama customer call'];
$admin_cp = $row['contact person'];
$admin_user = $row['nama user call'];
$admin_call = $row['hasil call'];
$admin_ket = $row['keterangan'];
$admin_waktu = $row['waktu'];
$admin_payment = $row['payment date'];

// Simpan hasil edit
if (isset($_POST['btn_simpan'])) {
    // variabel untuk menyimpan perubahan dari form input user
    $internet = $_POST['no_internet'];
    $nama = $_POST['nama'];
    $user = $_POST['user'];
    $cp = $_POST['cp'];
    $call = $_POST['call'];
    $keterangan = $_POST['keterangan'];
    $waktu = $_POST['waktu'];
    $payment = $_POST['payment'];

    // query update data yang sudah di input oleh user
    $query = "UPDATE admin SET `no. internet`='$internet', `contact person` = '$cp' ,`nama customer call`='$nama', `nama user call` = '$user', `hasil call`='$call', `keterangan`='$keterangan', `waktu` = '$waktu', `payment date`='$payment' WHERE `no. internet` = $admin_id";

    if ($send_data = mysqli_query($koneksi, $query)) {
        // echo "return row" . mysqli_num_rows($send_data);
        echo "<script type='text/javascript'>alert('BERHASIL');</script>";
    } else {
        echo "failed" . mysqli_error($koneksi);
    };
} else {
    //
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">EDIT DATA ADMIN</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">User ID</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" value="<?php echo $admin_id ?>">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="nama" class="form-control" id="username" value="<?php echo $admin_name ?>">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="text" name="user" class="form-control" id="password" value="<?php echo $admin_user ?>">
                </div>

                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="fullname" name="cp" class="form-control" id="fullname" value="<?php echo $admin_cp ?>">
                </div>
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="dataadmindanuser.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>