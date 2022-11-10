<?php
 
include('../config/koneksi.php');
include('./template/header.php');

$customer_id = $_GET['hapuscustomer'];

$get_data = mysqli_query($koneksi, "SELECT * FROM customer WHERE `no. internet` = $customer_id");

$row = mysqli_fetch_array($get_data);
$customer_name = $row['nama lengkap'];
$customer_cp = $row['contact person'];
$customer_address = $row['alamat'];



//jika benar mendapatkan GET id dari URL
if(isset($_POST['btn_hapus'])) {
    //melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
    $data = mysqli_query($koneksi, "SELECT * FROM customer WHERE `nama lengkap` = '$customer_name'");
    
    //jika query menghasilkan nilai > 0 maka eksekusi script di bawah
    if(mysqli_num_rows($data) > 0){
        //query ke database DELETE untuk menghapus data dengan kondisi id=$id
        $delete_query = "DELETE FROM `customer` WHERE `no. internet` = $customer_id";
        $del = mysqli_query($koneksi, $delete_query);
        if($del){
            echo '<script>alert("Berhasil menghapus data."); 
            document.location="datacustomer.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); 
            document.location="datacustomer.php";</script>';
        }
    }else{
        echo '<script>alert("ID tidak ditemukan di database."); 
        document.location="datacustomer.php";</script>';
    }
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">HAPUS CUSTOMER</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" value="<?php echo $customer_id ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama lengkap</label>
                    <input type="text" name="nama" class="form-control" id="username" value="<?php echo $customer_name ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="password" value="<?php echo $customer_address ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="">Contact person</label>
                    <input type="fullname" name="cp" class="form-control" id="fullname" value="<?php echo $customer_cp ?>" readonly>
                </div>


                <button type="submit" name="btn_hapus" class="btn btn-danger">Hapus</button>
                <a href="dataadmindanuser.php" class="btn btn-primary">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>