<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari url 
$berhenti_id = $_GET['berhenti_berlangganan'];
$get_data = mysqli_query($koneksi, "SELECT * FROM berhenti_berlangganan WHERE `id` = $berhenti_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$berhenti_pelanggan = $row['nama pelanggan'];
$berhenti_pemohon = $row['nama pemohon'];
$berhenti_alamat = $row['alamat'];
$berhenti_cp = $row['contact person'];
$berhenti_internet = $row['no. internet'];
$berhenti_alasan = $row['alasan'];
$berhenti_pembayaran = $row['pembayaran terakhir'];
$berhenti_deposit = $row['deposit'];

// Simpan hasil edit
if (isset($_POST['btn_simpan'])) {
    // variabel untuk menyimpan perubahan dari form input user
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $alamat = $_POST['alamat'];
    $cp = $_POST['contact_person'];
    $no_internet = $_POST['no_internet'];
    $alasan = $_POST['alasan'];
    $pembayaran_terakhir = $_POST['tanggal_pembayaran'];
    $deposit = $_POST['deposit'];

    // query update data yang sudah di input oleh user
    $query = "UPDATE berhenti_berlangganan SET `nama pelanggan`='$nama_pelanggan', `nama pemohon`='$nama_pemohon', `alamat`='$alamat', `contact person`='$cp', `no. internet`='$no_internet', `alasan`='$alasan', `pembayaran terakhir`='$pembayaran_terakhir', `deposit`='$deposit' WHERE `id`='$berhenti_id'";


    if ($send_data = mysqli_query($koneksi, $query)) {
        // echo "return row" . mysqli_num_rows($send_data);
        echo "<script type='text/javascript'>alert('BERHASIL');</script>";
    } else {
        echo "failed" . mysqli_error($koneksi);
    };
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Berhenti Berlangganan</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" id="pelanggan" value="<?php echo $berhenti_pelanggan ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" class="form-control" id="pemohon" value="<?php echo $berhenti_pemohon ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" value="<?php echo $berhenti_alamat ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nomor Handphone</label>
                    <input type="text" name="contact_person" class="form-control" id="cp" value="<?php echo $berhenti_cp ?>">
                </div>
                <div class="form-group">
                    <label for="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_id" value="<?php echo $berhenti_internet  ?>">
                </div>
                <div class="form-group">
                    <label for="">Alasan Cabut</label>
                    <input type="text" name="alasan" class="form-control" id="alasan" value="<?php echo $berhenti_alasan ?>">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Pembayaran</label>
                    <input type="date" name="tanggal_pembayaran" class="form-control" id="tanggal_pembayaran" value="<?php echo $berhenti_pembayaran ?>">
                </div>
                <div class="form-group">
                    <label for="">Deposit</label>
                    <input type="text" name="deposit" class="form-control" id="deposit" value="<?php echo $berhenti_deposit ?>">
                </div>

                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="laporanberhenti.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>