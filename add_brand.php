<?php 
include('fungsi.php');
include('koneksi.php');

 
  // mengambil data barang dengan kode paling besar
  $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM brand_tb");
  $data = mysqli_fetch_array($query);
  $kodeBrand = $data['kodeTerbesar'];
 
  // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
  // dan diubah ke integer dengan (int)
  $urutan = (int) substr($kodeBrand, 2, 2);
 
  // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
  $urutan++;
 
  // membentuk kode barang baru
  // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
  // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
  // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
  $huruf = "B";
  $kodeBrand = $huruf . sprintf("%02s", $urutan);
?>
<!DOCTYPE html>
<html>
<head>
  <title>ADD BRAND</title>
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
  <li style="float:right;margin-left: 0px; margin-right: 0px"><a class="active" href="add_product.php">Add Product</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 50px"><a class="active" href="add_cust.php">Add customer</a></li>
</ul>
<br><br><br><br>


<form action="proses_brand.php?page=tambah" method="post">
  <center>
<h1> ADD BRAND </h1>
    <table border="0">
    <tr>
      <td>id</td>
      <td>:</td>
      <td><input type="textbox" name="txtid"  value="<?php echo $kodeBrand ?>" readonly></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input type="textbox" name="txtname"></td>
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