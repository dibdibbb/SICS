<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php

if (isset($_POST['btn_simpan'])) {
    $pelanggan = $_POST['nama_pelanggan'];
    $pemohon = $_POST['nama_pemohon'];
    $alamat = $_POST['alamat'];
    $cp = $_POST['contact_person'];
    $no = $_POST['no_internet']; 
    $alasan = $_POST['alasan'];
    $pembayaran = $_POST['pembayaran']; 
    $deposit = $_POST['deposit'];

    $query = "INSERT INTO berhenti_berlangganan (`nama pelanggan`, `nama pemohon`, `alamat`, `contact person`, `no. internet`, `alasan`, `pembayaran`, `deposit`) VALUES ('$pelanggan', '$pemohon', '$alamat', '$cp', '$no', '$alasan', '$pembayaran', '$deposit') ";
    

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
                    <h1 class="h3 mb-4 text-gray-800">Input Berhenti Berlangganan</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="user" method="POST">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" id="pelanggan" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="" >Nama Pemohon</label>
                                    <input type="text" name="nama_pemohon" class="form-control" id="pemohon" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="" >Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" >Nomor Handphone</label>
                                    <input type="text" name="contact_person" class="form-control" id="cp" placeholder="+62xxx">
                                </div>
                                <div class="form-group">
                                    <label for="" >No Internet</label>
                                    <input type="text" name="no_internet" class="form-control" id="no_id" placeholder="Ex:19006xxx">
                                </div><div class="form-group">
                                    <label for="" >Alasan Cabut</label>
                                    <input type="text" name="alasan" class="form-control" id="alasan" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="" >Tanggal Pembayaran</label>
                                    <input type="datetime-local" name="pembayaran" class="form-control" id="pembayaran" placeholder="tanggal pembayaran">
                                </div>
                                <div class="form-group">
                                    <label for="" >Deposit</label>
                                    <input type="text" name="deposit" class="form-control" id="deposit" placeholder="">
                                </div>
                                <div class="form-group row">
                                </div>                                  
                                <button type="submit" name="btn_simpan" href="laporanberhentiberlangganan.php" class ="btn btn-primary btn-sm">Simpan</a>
                                
                            </form>
                        </div>
                    </div>
                   

                    

                </div>
                <!-- /.container-fluid -->
                
<?php include('../admin/template/footer.php'); ?>