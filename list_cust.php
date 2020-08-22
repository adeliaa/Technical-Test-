<<?php 
include('fungsi.php');
include('koneksi.php');
$sql = "SELECT * FROM customer_tb";
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

  <li style="float:right;margin-left: 50px; margin-right: 50px" ><a class="active" href="#about">Add Brand</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 0px"><a class="active" href="#about">Add Product</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 50px"><a class="active" href="add_cust.php">Add customer</a></li>
</ul>

<center><table border ='1'>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Adress</td>
    <td>Phone</td>
  </tr>
<?php
while ($tampil = mysqli_fetch_array($query)) 
  {
?>
<tr>
  <td><?php echo $tampil['id'];?></td>
  <td><?php echo $tampil['name'];?></td>
  <td><?php echo $tampil['address'];?></td>
  <td><?php echo $tampil['phone'];?></td>
  
  <td>
    <a href="edit_hobi.php?id=<?php echo $tampil['kd_hobi'];?>">Edit</a>
      <a href="edit_hobi.php?id=<?php echo $tampil['kd_hobi'];?>">Delete</a>
  </td>
</tr>
<?php
}
?>

</table>
</body>
</html>