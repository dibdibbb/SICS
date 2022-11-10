<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari url 
$calling_id = $_GET['calling'];
$get_data = mysqli_query($koneksi, "SELECT * FROM calling WHERE `no. internet` = $calling_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$calling_name = $row['nama customer call'];
$calling_cp = $row['contact person'];
$calling_user = $row['nama user call'];
$calling_call = $row['hasil call'];
$calling_ket = $row['keterangan'];
$calling_waktu = $row['waktu'];
$calling_payment = $row['payment date'];

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
    $payment = $_POST['payment date'];

    // query update data yang sudah di input oleh user
    $query = "UPDATE calling SET `no. internet`='$internet', `contact person` = '$cp' ,`nama customer call`='$nama', `nama user call` = '$user', `hasil call`='$call', `keterangan`='$keterangan', `waktu` = '$waktu', `payment date`='$payment' WHERE `no. internet` = $calling_id";

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
    <h1 class="h3 mb-4 text-gray-800">EDIT DATA CALLING</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" value="<?php echo $calling_id ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama customer call</label>
                    <input type="text" name="nama" class="form-control" id="username" value="<?php echo $calling_name ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama user call</label>
                    <input type="text" name="user" class="form-control" id="password" value="<?php echo $calling_user ?>">
                </div>

                <div class="form-group">
                    <label for="">Contact person</label>
                    <input type="fullname" name="cp" class="form-control" id="fullname" value="<?php echo $calling_cp ?>">
                </div>


                <div class="form-group">
                    <label for="" >Hasil Calling</label>
                    <select type="text" name="call" id="hasil_calling" class="form-control">
                        <option value="">Pilih hasil calling customer</option>
                        <option value="Tagihan Tersampaikan">Tagihan Tersampaikan</option>
                        <option value="Lunas">Lunas</option>
                        <option value="Panggilan Sibuk">Panggilan Sibuk</option>
                        <option value="Tidak Dapat Dihubungi">Tidak Dapat Dihubungi</option>
                        <option value="Diluar Service Area">Diluar Service Area</option>
                        <option value="Dimatikan">Dimatikan</option>
                        <option value="Nomor Tidak Aktif">Nomor Tidak Aktif</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="fullname" name="keterangan" class="form-control" id="fullname" value="<?php echo $calling_ket ?>">
                </div>

                <div class="form-group">
                    <label for="">Waktu</label>
                    <input type="time" name="waktu" class="form-control" id="fullname" value="<?php echo $calling_waktu ?>">
                </div>

                <div class="form-group">
                    <label for="">Payment Date</label>
                    <input type="date" name="payment" class="form-control" id="fullname" value="<?php echo $calling_payment ?>">
                </div>
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="dataadmindanuser.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>