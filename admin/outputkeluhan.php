<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Laporan Keluhan Customer</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="user">
                                <div class="form-group">
                                    <label for="" "nama"="">Nama Pelanggan</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="" "nama"="">Nama Pelapor</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="" "cp"="">Nomor Handphone</label>
                                    <input type="text" name="cp" class="form-control" id="cp" placeholder="+62xxx">
                                </div>
                                <div class="form-group">
                                    <label for="" "relasi"="">Relasi(Hubungan Kepemilikan)
                                    </label>
                                    <select  type="text" name="relasi" id="relasi" class="form-control">
                                            <option value="">Pilih Relasi</option> 
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
                                    <label for="" "no_internet"="">No Internet</label>
                                    <input type="text" name="no_internet" class="form-control" id="no_internet" placeholder="Ex:19006xxx">
                                </div><div class="form-group">
                                    <label for="" "permasalahan"="">Jenis Permasalahan</label>
                                    <select  type="text" name="permasalahan" id="permasalahan" class="form-control">
                                            <option value="">Pilih Permasalahan</option> 
                                            <option value="tagihan">Klaim Tagihan</option>
                                            <option value="gangguan">Klaim Gangguan</option>
                                            <option value="psb">Klaim PSB</option>
                                            <option value="retensi">Klaim RETENSI</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="" "laporan"="">Uraian Laporan</label>
                                    <textarea name="laporan" class="form-control"></textarea>
                                </div>
                                <div class="form-group row">
                                </div>                                  
                                <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                                
                            </form>
                        </div>
                    </div>
                   

                    

                </div>
                <!-- /.container-fluid -->
                
<?php include('../admin/template/footer.php'); ?>