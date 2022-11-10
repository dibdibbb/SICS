<?php

include('../config/koneksi.php');
include('./template/header.php');

$calling_id = $_GET['hapuscalling'];
$get_data = mysqli_query($koneksi, "SELECT * FROM calling WHERE `no. internet` = $calling_id");

$row = mysqli_fetch_array($get_data);
$calling_name = $row['nama customer call'];
$calling_cp = $row['contact person'];
$calling_user = $row['nama user call'];
$calling_call = $row['hasil call'];
$calling_ket = $row['keterangan'];
$calling_waktu = $row['waktu'];
$calling_payment = $row['payment date'];


//jika benar mendapatkan GET id dari URL
if(isset($_POST['btn_hapus'])) {
    //melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
    $data = mysqli_query($koneksi, "SELECT * FROM calling WHERE `no. internet` = '$calling_id'");
    
    //jika query menghasilkan nilai > 0 maka eksekusi script di bawah
    if(mysqli_num_rows($data) > 0){
        //query ke database DELETE untuk menghapus data dengan kondisi id=$id
        $delete_query = "DELETE FROM `calling` WHERE `no. internet` = $calling_id";
        $del = mysqli_query($koneksi, $delete_query);
        if($del){
            echo '<script>alert("Berhasil menghapus data."); 
            document.location="datacalling.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); 
            document.location="datacalling.php";</script>';
        }
    }else{
        echo '<script>alert("ID tidak ditemukan di database."); 
        document.location="datacalling.php";</script>';
    }
}


?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">HAPUS CALLING</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" value="<?php echo $calling_id ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama customer call</label>
                    <input type="text" name="nama" class="form-control" id="username" value="<?php echo $calling_name ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama user call</label>
                    <input type="text" name="user" class="form-control" id="password" value="<?php echo $calling_user ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="">Contact person</label>
                    <input type="fullname" name="cp" class="form-control" id="fullname" value="<?php echo $calling_cp ?>" readonly>
                </div>


                <div class="form-group">
                    <label for="">Hasil call</label>
                    <input type="fullname" name="call" class="form-control" id="fullname" value="<?php echo $calling_call ?>" readonly>
                </div>


                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="fullname" name="keterangan" class="form-control" id="fullname" value="<?php echo $calling_ket ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="">Waktu</label>
                    <input type="date" name="waktu" class="form-control" id="fullname" value="<?php echo $calling_waktu ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="">Payment Date</label>
                    <input type="date" name="payment" class="form-control" id="fullname" value="<?php echo $calling_payment ?>" readonly>
                </div>
                <button type="submit" name="btn_hapus" class="btn btn-danger">Hapus</button>
                <a href="dataadmindanuser.php" class="btn btn-primary">Batal</a>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>