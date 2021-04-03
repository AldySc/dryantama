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
  include('head_panduan.php');
  
?>
	<center>
    <h2>Panduan</h2>
	<br>
	<a class="btn btn-primary" href="pd_admin.php" role="button">Panduan ADMIN</a> |
    <a class="btn btn-primary" href="pd_petugas.php" role="button">Panduan PETUGAS</a> |
	<a class="btn btn-primary" href="pd_siswa.php" role="button">Panduan SISWA</a> 
	</center>
</body>
</html>