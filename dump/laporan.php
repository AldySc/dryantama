<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
<body>
  <?php
  include ('header2.php');
?>
	<center>
    <h2>Laporan</h2>
	<br>
    <a class="btn btn-primary" href="laporan_transaksi.php" role="button">Laporan Transaksi</a> |
	<a class="btn btn-primary" href="laporan_datasiswa.php" role="button">Laporan Data Siswa</a> 
	</center>
</body>
</html>