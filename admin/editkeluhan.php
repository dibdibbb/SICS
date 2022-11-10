<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari url 
$keluhan_id = $_GET['keluhan'];
$get_data = mysqli_query($koneksi, "SELECT * FROM keluhan WHERE `id` = $keluhan_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$keluhan_pelanggan = $row['nama pelanggan'];
$keluhan_pelapor = $row['nama pelapor'];
$keluhan_cp = $row['contact person'];
$keluhan_relasi = $row['relasi'];
$keluhan_internet = $row['no. internet'];
$keluhan_masalah = $row['masalah'];
$keluhan_uraian = $row['uraian'];

// Simpan hasil edit
if (isset($_POST['btn_simpan'])) {
    // variabel untuk menyimpan perubahan dari form input user
    $pelanggan = $_POST['nama_pelanggan'];
    $pelapor = $_POST['nama_pelapor'];
    $cp = $_POST['contact_person'];
    $relasi = $_POST['relasi'];
    $internet = $_POST['no_internet'];
    $masalah = $_POST['masalah'];
    $uraian = $_POST['uraian'];

    // query update data yang sudah di input oleh user
    $query = "UPDATE keluhan SET `nama pelanggan`='$pelanggan', `nama pelapor`='$pelapor', `contact person`='$cp', `relasi`='$relasi', `no. internet`='$internet', `masalah`='$masalah', `uraian`='$uraian' WHERE `id` = $keluhan_id";


    if ($send_data = mysqli_query($koneksi, $query)) {
        // echo "return row" . mysqli_num_rows($send_data);
        echo "<script type='text/javascript'>alert('BERHASIL');
        document.location='laporankeluhan.php';</script>'</script>";
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
    <h1 class="h3 mb-4 text-gray-800">Edit Keluhan</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" id="pelanggan" value="<?php echo $keluhan_pelanggan ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama Pelapor</label>
                    <input type="text" name="nama_pelapor" class="form-control" id="pelapor" value="<?php echo $keluhan_pelapor ?>">
                </div>
                <div class="form-group">
                    <label for="">Nomor Handphone</label>
                    <input type="text" name="contact_person" class="form-control" id="cp" value="<?php echo $keluhan_cp ?>">
                </div>
                <div class="form-group">
                    <label for="">Relasi(Hubungan Kepemilikan)</label>
                    <select type="text" name="relasi" id="relasi" class="form-control">
                        <option value="<?php echo $keluhan_relasi ?>" selected><?php echo $keluhan_relasi ?></option>
                        <option value="pemilik">Pemilik</option>
                        <option value="suami/istri">Suami/Istri</option>
                        <option value="orang_tua">Orang Tua</option>
                        <option value="anak">Anak</option>
                        <option value="anggota_keluarga_lain">Anggota Keluarga Lain</option>
                        <option value="teman">Teman</option>
                        <option value="tetangga">Tetangga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">No Internet</label>
                    <input type="text" name="no_internet" class="form-control" id="no. internet" value="<?php echo $keluhan_internet ?>">
                </div>
                <div class="form-group">
                    <label for="">Jenis Permasalahan</label>
                    <select type="text" name="masalah" id="permasalahan" class="form-control">
                        <option value="<?php echo $keluhan_masalah ?>" selected><?php echo $keluhan_masalah ?></option>
                        <option value="tagihan">Klaim Tagihan</option>
                        <option value="gangguan">Klaim Gangguan</option>
                        <option value="psb">Klaim PSB</option>
                        <option value="retensi">Klaim RETENSI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Uraian Laporan</label>
                    <textarea name="uraian" class="form-control" value="<?php echo $keluhan_uraian ?>"><?php echo $keluhan_uraian ?></textarea>
                </div>

                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="laporankeluhan.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>