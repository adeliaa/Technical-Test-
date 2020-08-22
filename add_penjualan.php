<?php 
include('fungsi.php');
include('koneksi.php');
$sql = "SELECT * FROM motorcycle_tb";
$query = mysqli_query ($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: black  ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: gray;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="4.php">RMP MOTORCYCLE</a></li>

  <li style="float:right;margin-left: 50px; margin-right: 50px" ><a class="active" href="add_brand.php">Add Brand</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 0px"><a class="active" href="add_product">Add Product</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 50px"><a class="active" href="add_cust.php">Add customer</a></li>
</ul><br><br><br>


<form action="proses_penjualan.php?page=tambah" method="post">
  <center>
    <h1>ADD PENJUALAN</h1>
    <table border="0">
    <tr>
      <td>id Cust</td>
      <td>:</td>
      <td><input type="textbox" name="idCust"></td>
    </tr>
    <tr>
      <td>Id Motor</td>
      <td>:</td>
      <td><input type="textbox" name="idMotor"></td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td>:</td>
      <td><input type="textbox" name="jumlah"></td>
    </tr>


    <tr>
      <td></td>
      <td></td>
      <td><input type="submit" name="cmbtambah" value="Tambah"></td>
    </tr>
  </table></center>
</form>
</body>
</html>