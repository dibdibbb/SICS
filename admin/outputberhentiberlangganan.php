<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Berhenti Berlangganan</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="user">
                                <div class="form-group">
                                    <label for="" "nama"="">Nama Pelanggan</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="" "nama"="">Nama Pemohon</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="" "alamat"="">Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" "cp"="">Nomor Handphone</label>
                                    <input type="text" name="cp" class="form-control" id="cp" placeholder="+62xxx">
                                </div>
                                <div class="form-group">
                                    <label for="" "no_internet"="">No Internet</label>
                                    <input type="text" name="no_internet" class="form-control" id="no_internet" placeholder="Ex:19006xxx">
                                </div><div class="form-group">
                                    <label for="" "alasan"="">Alasan Cabut</label>
                                    <input type="text" name="alasan" class="form-control" id="alasan" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="" "tanggal_pembayaran"="">Tanggal Pembayaran</label>
                                    <input type="date" name="tanggal_pembayaran" class="form-control" id="tanggal_pembayaran" placeholder="tanggal pembayaran">
                                </div>
                                <div class="form-group">
                                    <label for="" "deposit"="">Deposit</label>
                                    <input type="text" name="deposit" class="form-control" id="deposit" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="" "alamat"="">Scan Bukti Pembayaran Terakhir</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group row">
                                </div>                                  
                                <button type="submit" name="Simpan" class="btn btn-primary">Cetak</button>
                                
                            </form>
                        </div>
                    </div>
                   

                    

                </div>
                <!-- /.container-fluid -->
                
<?php include('../admin/template/footer.php'); ?>