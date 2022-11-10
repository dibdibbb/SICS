<?php

include('../config/koneksi.php');
include('./template/header.php');

$admin_id = $_GET['hapusadmin'];
$get_data = mysqli_query($koneksi, "SELECT * FROM admin WHERE `user_id` = $admin_id");

$row = mysqli_fetch_array($get_data);
$admin_user = $row['user_id'];
$admin_username = $row['username'];
$admin_password = $row['password'];
$admin_nama = $row['nama_lengkap'];


//jika benar mendapatkan GET id dari URL
if(isset($_POST['btn_hapus'])) {
    //melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE `user_id` = '$admin_id'");
    
    //jika query menghasilkan nilai > 0 maka eksekusi script di bawah
    if(mysqli_num_rows($data) > 0){
        //query ke database DELETE untuk menghapus data dengan kondisi id=$id
        $delete_query = "DELETE FROM `admin` WHERE `user_id` = $admin_id";
        $del = mysqli_query($koneksi, $delete_query);
        if($del){
            echo '<script>alert("Berhasil menghapus data."); 
            document.location="dataadmindanuser.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); 
            document.location="dataadmindanuser.php";</script>';
        }
    }else{
        echo '<script>alert("ID tidak ditemukan di database."); 
        document.location="dataadmindanuser.php";</script>';
    }
}


?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">HAPUS ADMIN</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">User ID</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" value="<?php echo $admin_id ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="nama" class="form-control" id="username" value="<?php echo $admin_username ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="user" class="form-control" id="password" value="<?php echo $admin_password ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="fullname" name="fullname" class="form-control" id="fullname" value="<?php echo $admin_nama_lengkap ?>" readonly>
                </div>
                <button type="submit" name="btn_hapus" class="btn btn-danger">Hapus</button>
                <a href="dataadmindanuser.php" class="btn btn-primary">Batal</a>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>   