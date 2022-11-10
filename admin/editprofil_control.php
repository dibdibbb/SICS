<?php
$id_user=$_SESSION['user_id'];
$sql_customer = "SELECT * FROM customer where admin = '$admin'";
$result_customer=mysqli_query($koneksi, $sql_customer);

if(mysqli_num_rows($result_customer)){

    $data_customer = mysqli_fetch_array($result_customer);

    if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_profil') {
        echo "update";
        die;
    }
}

?>