<?php 	

function validasiUsername($username)
{
	return preg_match('/^[a-zA-z]{1}[a-zA-z0-9]{4,8}$/i', $username);

}

function validasiPassword($password)
{
	return preg_match('/^[a-z]{1,}[A-z]{1,}[\d]{1,}[@]{1}[z#$%!]{1,}[0-9A-Za-z#$%!]{3,20}$/i', $password);

}

if (validasiUsername("a1dEL")) {
	echo "username Valid";
}
else {
	echo "username invalid";
}

if (validasiPassword("aB9@#bn")) {
	echo "<br> Password Valid";
}
else {
	echo "<br> Password invalid";
}

 ?>