<?php include('config/auto_load.php'); ?>

<?php
require './vendor/autoload.php';

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
        <td width='60%'>$keluhan_pelanggan</td> 
    </tr>  
    <tr>  
        <td>Nama Pelapor</td>
        <td>:</td>
        <td>$keluhan_pelapor</td>
    </tr>
    <tr>
        <td>Tlp</td>
        <td>:</td>
        <td>$keluhan_cp</td>
    </tr>
    <tr>
        <td>Relasi</td>
        <td>:</td>
        <td>$keluhan_relasi</td>
    </tr>
    <tr>
        <td>No.Internet</td>
        <td>:</td>
        <td>$keluhan_internet</td>
    </tr>
    <tr>
        <td>Masalah</td>
        <td>:</td>
        <td>$keluhan_masalah</td>
    </tr>
    <tr>
        <td>Uraian</td>
        <td>:</td>
        <td>$keluhan_uraian</td>
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
$dompdf->stream("cetak.pdf", array("Attachment"=>0));

?>



