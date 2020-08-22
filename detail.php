<?php
include ("fungsi.php");
if(!isset($_GET['id']))
{
  
//  echo "<script>alert('tidak ada data yang dilihat')</script>";
  //echo "<script>url:location = 'index_karyawan.php';</script>";
}
$nik = $_GET['id'];
$calon = get($_GET['id']);

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
</ul>
<br><br><br><br>
<table border ='0'>
  <tr>
    <td>Nama Motor</td>
    <td>:</td>
    <td><?= $calon['name']; ?></td>
  </tr>
  <tr>
    <td>brand ID</td>
    <td>:</td>
    <td><?= $calon['brand_id']; ?></td>
  </tr>
   <tr>
    <td>Color</td>
    <td>:</td>
    <td><?= $calon['color']; ?></td>
  </tr>
   <tr>
    <td>Specification</td>
    <td>:</td>
    <td><?= $calon['specification']; ?></td>
  </tr>
   <tr>
    <td>Stock</td>
    <td>:</td>
    <td><?= $calon['stock']; ?></td>
  </tr>
   <tr>
    <td></td>
    <td></td>
    <td><img style="width: 150px" src="<?= $calon['image']; ?>"></td>
  </tr>


</table>
</body>
</html>