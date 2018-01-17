<?php
include('db.php');

$nama = $_POST['nama']; 
$jadwal = $_POST['jadwal'];
$nm_mobil = $_POST['nm_mobil'];
$no_pol = $_POST['no_pol'];
$jns_kerusakan = $_POST['jns_kerusakan'];
$estimasi = $_POST['estimasi'];
$biaya = $_POST['biaya'];
 
$query = mysql_query("insert into data values('', '$nama', '$jadwal', '$nm_mobil', '$no_pol', 
						'$jns_kerusakan', '$estimasi', '$biaya')") or die(mysql_error());
 
if ($query) {
	echo '<script>alert("Berhasil Menambah Data !");</script>';
    echo '<meta http-equiv="Refresh" content="0; url=data.php">';
}
?>