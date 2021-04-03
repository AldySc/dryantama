<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.tg  {
	border-collapse:collapse;
	border-spacing:0;
	}
.tg td{
	border-color:black;
	border-style:solid;
	border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;
  }
.tg th{
	border-color:black;
	border-style:solid;
	border-width:1px;
	font-family:Arial, sans-serif;
	font-size:14px;
  font-weight:normal;
  overflow:hidden;
  padding:10px 5px;
  word-break:normal;
  }
.tg 
.tg-0pky{
	border-color:inherit;
	text-align:left;
	vertical-align:
	top
	}
</style>
</head>
<body>
<?php
  include('head_panduan.php');
  
?>
<center>
<h2>Panduan SISWA</h2>
<table class="tg">
<thead>
<tr>
    <th class="tg-0pky">
	<center><b>PETUNJUK</b></center>
	</th>
  </tr>
  </thead>
  <tr>
    <th class="tg-0pky">1. Bagian Halaman Login
	<br>Terdapat form untuk login dan variabel yang memiliki data bertuliskan "Beralih ke siswa" jika anda siswa maka klik "Beralih ke siswa"
	<br><img src="gambar/gambar14.1.png" alt="Gambar Form Siswa Pembayaran" style="width:200px;height:200px;"><br>
	</th>
  </tr>
<tbody>
  <tr>
    <td class="tg-0pky">2. Bagian Dashboard Siswa
	<br>Terdapat form history pembayaran Siswa siswa dan bisa dijadikan untuk "kembali" jika anda sudah melihat data history transaksi pembayaran anda
	<br><img src="gambar/gambar14.2.png" alt="Gambar Form Siswa" style="width:600px;height:100px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">3. Bagian Kembali ke Login
	<br>Untuk mengembalikan ke halaman login
	<br><img src="gambar/gambar14.3.png" alt="Gambar Form Siswa" style="width:600px;height:100px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">4. Siswa hanya bisa melihat history transaksi pembayaran saja dengan cara memasukan nisn
	<br><img src="gambar/gambar14.4.png" alt="Gambar Form Siswa" style="width:600px;height:100px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">5. Masukan NISN anda, jika data anda terdaftar di sekolah ini, jika nisn yang anda masukkan tidak menampilkan apa-apa berarti anda bukan siswa dari sekolah
	<br><img src="gambar/gambar14.5.png" alt="Gambar Form Siswa" style="width:500px;height:150px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">7. Jika ingin mengembalikan/tidak memperlihatkan data anda maka klik saja "Dashboard Siswa" atau "Kembali ke login" yang ada pada header
	<br><img src="gambar/gambar14.6.png" alt="Gambar Form Siswa" style="width:600px;height:100px;"><br>
	</td>
  </tr>
</tbody>
</table>
</body>
</html>