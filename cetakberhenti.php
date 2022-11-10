<?php include('config/auto_load.php'); ?>

<?php
require './vendor/autoload.php';

$berhenti_id = $_GET['berhenti_berlangganan'];
$get_data = mysqli_query($koneksi, "SELECT * FROM berhenti_berlangganan WHERE `id` = $berhenti_id");

// data mapping untuk dicetak dalam form sebagai value input
$row = mysqli_fetch_array($get_data);
$berhenti_pelanggan = $row['nama pelanggan'];
$berhenti_pemohon = $row['nama pemohon'];
$berhenti_alamat = $row['alamat'];
$berhenti_cp = $row['contact person'];
$berhenti_internet = $row['no. internet'];
$berhenti_alasan = $row['alasan'];
$berhenti_pembayaran = $row['pembayaran'];
$berhenti_deposit = $row['deposit'];


// // reference the Dompdf namespace
use Dompdf\Dompdf;

// // instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<style>
    table, th, td {
        padding: 5px;
}

.judul {
    margin-botton: 0px;
    font-size: 16px;
    font-weight: bold;
}
</style>

<img src="C:/xampp/htdocs/SICSTELKOM/vendor/dompdf/dompdf/src/Image/tlkmm.jpg" height="15%" width="15%">

<div style="margin-left: 10px">
    <div style="font-sixe:18px" >Data Keluhan Customer</div>
    <div style="font-sixe:20px">PT. TELEKOMUNIKASI INDONESIA,TbK (TELKOM) JEMBER </div>
    <div style="font-sixe:12px">jl. Gajah Mada</div>

</div>

<hr style="border: 0,5px solid black; margin: 10px 5px 10px 5px;">';


// DYNAMIC VALUE FOR THE PDF 
$html .="

<h3 class='judul'>A. Detail Customer</h3>
<table border='1' width='100%'>
    <tr>
        <td width='15%'>Nama Pelanggan</td>
        <td width='1%'>:</td>
        <td width='60%'>$berhenti_pelanggan</td> 
    </tr>  
    <tr>  
        <td>Nama Pelapor</td>
        <td>:</td>
        <td>$berhenti_pemohon</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>$berhenti_alamat</td>
    </tr>
    <tr>
        <td>No Handphone</td>
        <td>:</td>
        <td>$berhenti_cp</td>
    </tr>
    <tr>
        <td>No.Internet</td>
        <td>:</td>
        <td>$berhenti_internet</td>
    </tr>
    <tr>
        <td>Alasan</td>
        <td>:</td>
        <td>$berhenti_alasan</td>
    </tr>
    <tr>
        <td>Tanggal Pembayaran</td>
        <td>:</td>
        <td>$berhenti_pembayaran</td>
    </tr>
    <tr>
        <td>Deposit</td>
        <td>:</td>
        <td>$berhenti_deposit</td>
    </tr>

</table>


";

// <div style="font-size: 12px; margin-left: 10px;">$nbsp; Tanggal CETAK: '. date('d-m-Y') .'</div>





$dompdf->loadHtml($html);

// // (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
$dompdf->render();

// // Output the generated PDF to Browser
$dompdf->stream("cetak.pdf", array("Attachment" => 0));

?>



