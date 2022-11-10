<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>
<?php include('../config/koneksi.php'); ?>

<?php
if (isset($_POST['btn_simpan'])) {
    $internet = $_POST['no_internet'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $cp = $_POST['cp'];

    $query = "INSERT INTO customer (`no. internet`, `nama lengkap`, alamat, `contact person` ) VALUES ('$internet', '$nama', '$alamat', '$cp') ";
    

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
    <h1 class="h3 mb-4 text-gray-800">Input Customer</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="" "no_internet"="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" placeholder="Ex:19006xxx">
                </div>
                <div class="form-group">
                    <label for="" "nama"="">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="" "alamat"="">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="" "cp"="">CP</label>
                    <input type="text" name="cp" class="form-control" id="cp" placeholder="+62xxx">
                </div>

                <div class="form-group row">

                </div>
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="datacustomer.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>