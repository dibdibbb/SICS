<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari url 
$customer_id = $_GET['customer'];

$get_data = mysqli_query($koneksi, "SELECT * FROM customer WHERE `no. internet` = $customer_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$customer_name = $row['nama lengkap'];
$customer_cp = $row['contact person'];
$customer_address = $row['alamat'];

// Simpan hasil edit
if (isset($_POST['btn_simpan'])) {
    // variabel untuk menyimpan perubahan dari form input user
    $internet = $_POST['no_internet'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $cp = $_POST['cp'];
   
 
    // query update data yang sudah di input oleh user
    $query = "UPDATE customer SET `no. internet`='$internet', `nama lengkap`='$nama', `alamat`='$alamat', `contact person`='$cp' WHERE `no. internet` = $customer_id";

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
    <h1 class="h3 mb-4 text-gray-800">EDIT CUSTOMER</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">no. internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" value="<?php echo $customer_id ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama lengkap</label>
                    <input type="text" name="nama" class="form-control" id="username" value="<?php echo $customer_name ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="password" value="<?php echo $customer_address ?>">
                </div>

                <div class="form-group">
                    <label for="">Contact person</label>
                    <input type="fullname" name="cp" class="form-control" id="fullname" value="<?php echo $customer_cp ?>">
                </div>


                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="datacustomer.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>