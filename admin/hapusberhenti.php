<?php

include('../config/koneksi.php');
include('./template/header.php');

$berhenti_id = $_GET['hapusberhenti_berlangganan'];
$get_data = mysqli_query($koneksi, "SELECT * FROM berhenti_berlangganan WHERE `id` = $berhenti_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$berhenti_pelanggan = $row['nama pelanggan'];
$berhenti_pemohon = $row['nama pemohon'];
$berhenti_alamat = $row['alamat'];
$berhenti_cp = $row['contact person'];
$berhenti_internet = $row['no. internet'];
$berhenti_alasan = $row['alasan'];
$berhenti_pembayaran = $row['pembayaran'];
$berhenti_deposit = $row['deposit'];

//jika benar mendapatkan GET id dari URL
if (isset($_POST['btn_hapus'])) {
    //melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
    $data = mysqli_query($koneksi, "SELECT * FROM berhenti_berlangganan WHERE `id` = '$berhenti_id'");

    //jika query menghasilkan nilai > 0 maka eksekusi script di bawah
    if (mysqli_num_rows($data) > 0) {
        //query ke database DELETE untuk menghapus data dengan kondisi id=$id
        $delete_query = "DELETE FROM `berhenti_berlangganan` WHERE `id` = $berhenti_id";
        $del = mysqli_query($koneksi, $delete_query);
        if ($del) {
            echo '<script>alert("Berhasil menghapus data."); 
            document.location="laporanberhenti.php";</script>';
        } else {
            echo '<script>alert("Gagal menghapus data."); 
            document.location="laporanberhenti.php";</script>';
        }
    } else {
        echo '<script>alert("ID tidak ditemukan di database."); 
        document.location="laporanberhenti.php";</script>';
    }
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hapus Berhenti Berlangganan</h1>
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
                
                <button type="submit" name="btn_hapus" class="btn btn-danger">Hapus</button>
                <a href="laporanberhentiberlangganan.php" class="btn btn-primary">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>