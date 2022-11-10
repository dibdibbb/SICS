<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php

if (isset($_POST['btn_simpan'])) {
    $pelanggan = $_POST['nama_pelanggan'];
    $pelapor = $_POST['nama_pelapor'];
    $cp = $_POST['contact_person'];
    $relasi = $_POST['relasi']; 
    $internet = $_POST['no_internet'];
    $masalah = $_POST['masalah']; 
    $uraian = $_POST['uraian'];

    $query = "INSERT INTO keluhan (`nama pelanggan`, `nama pelapor`,`contact person`, `relasi`, `no. internet`, `masalah`, `uraian`) VALUES ('$pelanggan', '$pelapor','$cp', '$relasi', '$internet', '$masalah', '$uraian') ";

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
                    <h1 class="h3 mb-4 text-gray-800"> Input Laporan Keluhan Customer</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="user" method="POST">
                                <div class="form-group">
                                    <label for="" >Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" id="pelanggan" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="" >Nama Pelapor</label>
                                    <input type="text" name=" nama_pelapor" class="form-control" id="pelapor" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="" >Nomor Handphone</label>
                                    <input type="text" name="contact_person" class="form-control" id="cp" placeholder="+62xxx">
                                </div>
                                <div class="form-group">
                                    <label for="" >Relasi(Hubungan Kepemilikan)</label>
                                    <select type="text" name="relasi" id="relasi" class="form-control">
                                            <option value="">Pilih relasi customer</option>
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
                                    <label for="" >No Internet</label>
                                    <input type="text" name="no_internet" class="form-control" id="no_internet" placeholder="Ex:19006xxx">
                                </div>
                                <div class="form-group">
                                    <label for="" >Jenis Permasalahan</label>
                                    <select type="text" name="masalah" id="masalah" class="form-control">
                                            <option value="">Pilih permasalahan customer</option>
                                            <option value="tagihan">Klaim Tagihan</option>
                                            <option value="gangguan">Klaim Gangguan</option>
                                            <option value="psb">Klaim PSB</option>
                                            <option value="retensi">Klaim RETENSI</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="" >Uraian Laporan</label>
                                    <textarea name="uraian" class="form-control"></textarea>
                                </div>
                                <div class="form-group row">
                                </div>                                  
                                <button type="submit" name="btn_simpan" href="laporankeluhan.php" class="btn btn-primary">Simpan</button>
                               
                                
                            </form>
                        </div>
                    </div>
                   

                    

                </div>
                <!-- /.container-fluid -->
                
<?php include('../admin/template/footer.php'); ?>