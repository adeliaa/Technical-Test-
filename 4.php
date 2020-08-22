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

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 75%;
}

th, td {
  padding: 20px;
}
</style>
</head>
<body>

<ul>
  <li><a href="5.php">RMP MOTORCYCLE</a></li>

  <li style="float:right;margin-left: 50px; margin-right: 50px" ><a class="active" href="add_brand.php">Add Brand</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 0px"><a class="active" href="add_product">Add Product</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 50px"><a class="active" href="add_cust.php">Add customer</a></li>
</ul>
<br><br>
<center><table border ='1'>
  <tr>
    <td>Nama Motor</td>
    <td>Gambar</td>
    <td>Action</td>
  </tr>
<?php
while ($tampil = mysqli_fetch_array($query)) 
  {
?>
<tr>
  <td><?php echo $tampil['name'];?></td>
  <td><img style="width: 200px" src="<?php echo $tampil['image']?>"></td>
  <td>
    <a href="add_penjualan.php">Buy</a>
    <a href="detail.php?id=<?=$tampil['id']?>">Detail</a>
  </td>
</tr>
<?php
}
?>

</table>
</body>
</html>