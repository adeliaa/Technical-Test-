<?php
include ('fungsi.php');
	
	if(!isset($_GET['page'])){
	echo "<script>url:location='add_cust.php';</script>";
}else{

$txtid = $_POST['txtid'];
$txtname = $_POST['txtname'];
$txtadress = $_POST['txtadress'];
$txtphone = $_POST['txtphone'];


$data = addCust($txtid, $txtname, $txtadress, $txtphone);

if ($data) {
	
	echo "<script>alert('Tambah Customer Berhasil')</script>";
	echo "<script>url:location='list_cust.php';</script>";
}
else {

	echo "<script>alert('Tambah Customer Gagal')</script>";
	echo "<script>url:location='add_cust.php';</script>";	
}
}
?>