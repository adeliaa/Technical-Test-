<?php 
include('fungsi.php');
include('koneksi.php');

 $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM customer_tb");
  $data = mysqli_fetch_array($query);
  $kode = $data['kodeTerbesar'];
 
  // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
  // dan diubah ke integer dengan (int)
  $urutan = (int) substr($kode, 2, 2);
 
  // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
  $urutan++;
 
  // membentuk kode barang baru
  // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
  // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
  // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
  $huruf = "C";
  $kode = $huruf . sprintf("%02s", $urutan);

?>
<!DOCTYPE html>
<html>
<head>
  <title>ADD CUSTOMER</title>
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
  <li style="float:right;margin-left: 0px; margin-right: 0px"><a class="active" href="#about">Add Product</a></li>
  <li style="float:right;margin-left: 0px; margin-right: 50px"><a class="active" href="add_cust.php">Add customer</a></li>
</ul><br><br><br>



<form action="proses_cust.php?page=tambah" method="post">
  <center>
<p>ADD CUSTOMER</p>
    <table border="0">
    <tr>
      <td>id</td>
      <td>:</td>
      <td><input type="textbox" name="txtid" value="<?php echo $kode ?>" readonly></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input type="textbox" name="txtname"></td>
    </tr>
    <tr>
      <td>Adress</td>
      <td>:</td>
      <td><input type="textbox" name="txtadress"></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td>:</td>
      <td><input type="textbox" name="txtphone"></td>
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