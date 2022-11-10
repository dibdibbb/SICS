<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari url 
$keluhan_id = $_GET['hapuskeluhan'];
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

//jika benar mendapatkan GET id dari URL
if(isset($_POST['btn_hapus'])) {
    //melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
    $data = mysqli_query($koneksi, "SELECT * FROM keluhan WHERE `id` = '$keluhan_id'");
    
    //jika query menghasilkan nilai > 0 maka eksekusi script di bawah
    if(mysqli_num_rows($data) > 0){
        //query ke database DELETE untuk menghapus data dengan kondisi id=$id
        $delete_query = "DELETE FROM `keluhan` WHERE `id` = $keluhan_id";
        $del = mysqli_query($koneksi, $delete_query);
        if($del){
            echo '<script>alert("Berhasil menghapus data."); 
            document.location="laporankeluhan.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); 
            document.location="laporankeluhan.php";</script>';
        }
    }else{
        echo '<script>alert("ID tidak ditemukan di database."); 
        document.location="laporankeluhan.php";</script>';
    }
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hapus Keluhan</h1>
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

                <button type="submit" name="btn_hapus" class="btn btn-danger">Hapus</button>
                <a href="laporankeluhan.php" class="btn btn-primary">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../admin/template/footer.php'); ?>