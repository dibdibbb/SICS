<?php include('../config/auto_load.php'); ?>
<?php include('../admin/template/header.php'); ?>

<?php
// mendapatkan id dari url
$calling_id = $_GET['calling'];
$get_data = mysqli_query($koneksi, "SELECT * FROM calling WHERE `id` = $calling_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$calling_internet =  ["no. internet"];
$calling_cp = $row ["contact person"];
$calling_nama = $row ["nama customer call"];
$calling_user = $row["nama user call"];
$calling_call = $row["hasil call"];
$calling_ket = $row ["keterangan"];
$calling_payment = $row ["payment date"];
?>

<h3> Detail Customer </h3>
<div class = "content">
    <table class = "table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%" > No. Internet </td>
            <td width="1%"> : </td>
            <td><?php foreach ($calling_internet as $row); {
               print_r($row);
            }?></td>
        </tr>
        <tr>
            <td > Contact Person </td>
            <td width="1%"> : </td>
            <td><?php echo $calling_cp ?></td>
        </tr>
        <tr>
            <td > Customer Call </td>
            <td width="1%"> : </td>
            <td><?php echo $calling_nama ?></td>
        </tr>
        <tr>
            <td > User Call </td>
            <td width="1%"> : </td>
            <td><?php echo $calling_user ?></td>
        </tr>
        <tr>
            <td > Hasil Call </td>
            <td width="1%"> : </td>
            <td><?php echo $calling_call ?></td>
        </tr>
        <tr>
            <td > Keterangan </td>
            <td width="1%"> : </td>
            <td><?php echo $calling_ket ?></td>
        </tr>
        <tr>
            <td  > Pembayaran Terakhir </td>
            <td width="1%"> : </td>
            <td><?php echo $calling_payment ?></td>
        </tr>
</table>
</div>
<a href = "datacustomer.php" class="btn btn-primary"> Kembali </a>

<?php include('../admin/template/footer.php'); ?>

