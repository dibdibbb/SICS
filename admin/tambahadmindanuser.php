<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php

if (isset($_POST['btn_simpan'])) {
    $internet = $_POST['no_internet'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $fullname = $_POST['fullname'];

    $query = "INSERT INTO admin (`user_id`, `username`, `password`, `nama_lengkap` ) VALUES ('$internet', '$username', '$password', '$fullname') ";

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
    <h1 class="h3 mb-4 text-gray-800">Input Admin</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="" "no_id"="">No ID</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" placeholder="Ex:19006xxx">
                </div>
                <div class="form-group">
                    <label for="" "username"="">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="" "password"="">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="xxxxx">
                </div>

                <div class="form-group">
                    <label for="" "fullname"="">Fullname</label>
                    <input type="fullname" name="fullname" class="form-control" id="fullname" placeholder="">
                </div>
                <div class="form-group row">

                </div>
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="dataadmindanuser.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>