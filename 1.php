<?php 
//fungsi pertama menggunakan password_hash()
// dan fungsi password_verify untuk mencocokan data
$pass = "Adele"; //deklarasi password
echo "password = $pass"."<br>";//nampilin password

echo password_hash($pass, PASSWORD_DEFAULT)."<br>";//enkripsi dan menampilkan password

$password = password_hash($pass, PASSWORD_DEFAULT);// enkripsi password

if (password_verify("Adele", $password)) { //kondisi dimana password yg di enkripai sama atau tidak
	echo"password sama = Adele"."<br>"; //menampilkan
}
else {
	echo"beda password";//menampilkan
}

//fungsi kedua
	echo "<br> Fungsi Kedua <br>";
	$pass1 = "Farah";
	$encode = base64_encode($pass1);
	$decode = base64_decode($encode);
	echo "password = ".$pass1."<br>";
	echo "teks yang di ekripsi =".$encode."<br>";
	echo "teks yang di dekripsi = ".$decode."<br>";
 ?>


