<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php

if (isset($_POST['btn_simpan'])) {
    $internet = $_POST['no_internet'];
    $nama = $_POST['nama'];
    $nama_call = $_POST['nama-call'];
    $cp = $_POST['cp'];
    $hasil_calling = $_POST['hasil_calling'];
    $keterangan = $_POST['keterangan'];
    $waktu = $_POST['waktu'];
    $payment = $_POST['payment'];

    $query = "INSERT INTO `calling` (`no. internet`, `contact person`, `nama customer call`, `nama user call`, `hasil call`, `keterangan`, `waktu`, `payment date` ) VALUES ('$internet', '$cp', '$nama', '$nama_call', '$hasil_calling', '$keterangan', '$waktu', '$payment') ";


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
    <h1 class="h3 mb-4 text-gray-800">Input Calling Customer </h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="" "no_internet"="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no_internet" placeholder="Ex:19006xxx">
                    
                </div>
                <div class="form-group">
                    <label for="" "cp"="">CP</label>
                    <input type="text" name="cp" class="form-control" id="cp" placeholder="+62">
                </div>
                <div class="form-group">
                    <label for="" "nama"="">Nama Customer Call</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="" "nama"="">Nama User Call</label>
                    <input type="text" name="nama-call" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="" "hasil_calling"="">Hasil Calling</label>
                    <select type="text" name="hasil_calling" id="hasil_calling" class="form-control">
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
                    <label for="" "keterangan"="">Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="" "waktu"="">Waktu</label>
                    <input type="time" name="waktu" class="form-control" id="waktu" placeholder="">
                </div>
                <div class="form-group">
                    <label for="" "payment"="">Payment Date</label>
                    <input type="date" name="payment" class="form-control" id="payment" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="datacalling.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>