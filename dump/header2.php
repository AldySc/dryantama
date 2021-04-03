<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:index.php?pesan=belummasuk");
}

?>
<?php
if($_SESSION['level']=="admin"){
?>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="dump.php">Dashboard Admin |</a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
		<div class="container">
      <nav class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="spp.php">SPP |<span class="sr-only">(current)</span></a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kelas.php">Kelas |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="petugas.php">Pengguna |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="siswa.php">Siswa |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi.php">Transaksi Pembayaran |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="laporan.php">Laporan |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout |</a>
          </li>
        </nav>
		</div>
      </nav>
        <?php
      }
      else if($_SESSION['level']=="petugas"){
        ?>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="dump.php">Dashboard Petugas |</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="transaksi.php">Transaksi Pembayaran |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout |</a>
              </li>
            </div>
          </nav>
          <?php
        }
        ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        </form>
  </head>
<body>

    </div>
</body>
</html>
