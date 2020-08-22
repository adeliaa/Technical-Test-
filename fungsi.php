<?php 


	function getDataMotor(){
		include('koneksi.php');
		$sql = "SELECT * FROM motorcycle_tb";
		$query = mysqli_query($koneksi, $sql);
		return $query;
		}



	function addCust($a,$b,$c,$d){
		include('koneksi.php');
		$sql = "INSERT INTO customer_tb values ('$a','$b','$c','$d')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}

	function addBrand($a,$b){
		include('koneksi.php');
		$sql = "INSERT INTO brand_tb values ('$a','$b')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}

	function tambah($a,$b,$c){
		include('koneksi.php');
		$sql = "INSERT INTO penjualan_tb values ('$a','$b','$c')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}

	function get($a)
	{ 
		include ('koneksi.php');
		$sql = "SELECT * FROM motorcycle_tb WHERE id ='$a'";
		$query = mysqli_query($koneksi, $sql);
		$data = mysqli_fetch_array($query);
		return $data;
	}


?>

