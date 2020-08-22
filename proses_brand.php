<?php
include ('fungsi.php');
	
		if(!isset($_GET['page'])){
	echo "<script>url:location='add_cust.php';</script>";
}else{


$txtid = $_POST['txtid'];
$txtname = $_POST['txtname'];

$data = addBrand($txtid, $txtname);

if ($data) {
	
	echo "<script>alert('Tambah Brand Berhasil')</script>";
	echo "<script>url:location='add_brand';</script>";
}
else {

	echo "<script>alert('Tambah Brand Gagal')</script>";
	echo "<script>url:location='add_brand.php';</script>";	
}
}
?>