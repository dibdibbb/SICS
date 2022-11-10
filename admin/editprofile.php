<?php include('../config/auto_load.php'); ?>
<?php include('../admin/editprofil_control.php'); ?>
<?php include('../admin/template/header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profil</h1>
        <form class="user" method="POST" action="<?= $base_url ?>../admin/editprofile.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                            
                   <div class="form-group">
                                    <label for="" "nama"="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Username" value="<?= $customer['nama'] ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                    <label for="" "tempat_lahir"="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"  value="<?= $customer['tempat_lahir'] ?>">>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="" "tanggal_lahir"="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir"  value="<?= date("d-m-Y", strtotime($customer['tanggal_lahir'])); ?>">
                                    </div>
                                    </div>                                  
                                    <div class="form-group row">
                                    <div class="col-md-6">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <?php
                                    $laki = "";
                                    $perempuan = "";

                                    if($customer ['jenis_kelamin'] == "L") {
                                        $laki = "checked";
                                    } else {
                                        $perempuan="checked";
                                    }
                                    ?>
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="Laki">
                                                <label for="laki" class="form-check-label">Laki-laki</label>
                                                </div>
                                                <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" value="P" <?= $perempuan ?> class="form-check-input" id="perempuan">
                                                <label for="perempuan" class="form-check-label" for="pr">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="" "agama"="">Agama</label>
                                        <select name="agama" id="agama" class="Form-control">
                                            <option value="">Pilih Agama</option> 
                                            <option value="islam">islam</option>
                                            <option value="kristen">kristen</option>
                                            <option value="hindu">hindu</option>
                                            <option value="budha">budha</option>
                                            <option value="konghucu">konghucu</option>
                                   </select>
                                    </div>
                                    </div>                                  
                                    <div class="form-group">
                                    <label for="" "alamat"="">Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                    <label for="" "username"="">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                    </div>
                                    <div class="col-md-6">
                                    <label for="" "telepon"="">telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="telepon" value="<?= $customer['telepon']?>">
                                    </div>
                                </div>                                  
                               
                            
                        </div>
                    <div class="col-md-4">
                        <?php
                        if(isset($customer['foto'])) {
                            $foto = '../uploads/'. $customer['foto'];
                        }else {
                            $foto = '../asset/img/telkom.jpg';
                        }
                        ?>
                        <img src="<?= $foto ?>" alt="foto profil" class="img-fluid">
                        <input type="file" name="gambar" class="form-control mt-2">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="Simpan" value ="simpan_profile" class="btn btn-primary">ubah</button>
                    </div>
                    </div>
                    </form>

                   

                    

                </div>
                <!-- /.container-fluid -->
                
<?php include('../admin/template/footer.php'); ?>