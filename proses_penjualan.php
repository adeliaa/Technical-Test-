<?php
include ('fungsi.php');
	
		if(!isset($_GET['page'])){
	echo "<script>url:location='add_cust.php';</script>";
}else{


$txtcust = $_POST['idCust'];
$txtmotor = $_POST['idMotor'];
$jumlah = $_POST['jumlah'];

$data = tambah($txtcust, $txtmotor, $jumlah);

if ($data) {
	
	echo "<script>alert('Tambah Penjualan Berhasil')</script>";
	echo "<script>url:location='4.php';</script>";
}
else {

	echo "<script>alert('Tambah Penjualan Gagal')</script>";
	echo "<script>url:location='add_brand.php';</script>";	
}
}
?>