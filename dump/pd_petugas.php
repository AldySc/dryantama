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
<h2>Panduan PETUGAS</h2>
<table class="tg">
<thead>
<tr>
    <th class="tg-0pky">
	<center><b>PETUNJUK</b></center>
	</th>
  </tr>
  </thead>
  <tr>
    <th class="tg-0pky">1. Login terlebih dahulu sebagai petugas, ketika anda login sistem akan mengecek melalui "username" apakah anda admin/petugas
	<br><img src="gambar/gambar1.png" alt="Gambar Login" style="width:200px;height:200px;"><br>
	</th>
  </tr>
<tbody>
  <tr>
    <td class="tg-0pky">2. Petugas bisa mengakses data transaksi pembayaran dan logout saja
	<br><img src="gambar/gambar11.3.png" alt="Gambar Login" style="width:800px;height:100px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">3. Bagian Dashboard petugas
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian ini tidak berisi apa-apa, hanya halaman awal ketika anda berhasil login
	<br><img src="gambar/gambar11.2.png" alt="Gambar Login" style="width:800px;height:100px;"><br>
	</td>
  </tr>
   <tr>
    <td class="tg-0pky">8. Bagian Transaksi Pembayaran
	<br>- Untuk melihat bagian transaksi pembayaran klik pada header yang bernama "Transaksi Pembayaran"
	<br><img src="gambar/gambar12.1.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Tersedia kolom pencarian, tambah Transaksi Pembayaran, edit dan hapus
	<br><img src="gambar/gambar12.2.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Terdapat juga baris yang terdiri dari no, nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan, jumlah bayar dan action
	<br><img src="gambar/gambar12.3.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Ketikan nisn untuk mencari data transaksi pembayaran
	<br><img src="gambar/gambar12.4.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:150px;"><br>
	<br>- Klik pada bagian "+ Transaksi" untuk menambah data transaksi pembayaran
	<br><img src="gambar/gambar12.5.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Dibagian ini isi kolom nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan dan jumlah bayar jika sudah klik "Simpan TRANSAKSI"
	<br><img src="gambar/gambar8.6.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:400px;"><br>
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data transaksi pembayaran
	<br><img src="gambar/gambar12.6.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Disini anda bisa mengedit data transaksi pembayaran seperti merubah tanggal bayar, bulan bayar dan jumlah bayar, untuk nama petugas, nisn tahun bayar dan spp per bulan saya disabled (tidak bisa dirubah) karna bersifat permanen, jika sudah klik "Simpan Perubahan. Jika ada peringatan tidak menghapus data kemungkinan data tersebut sudah ter foreign key di tabel/data lain
	<br><img src="gambar/gambar8.8.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:400px;"><br>
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action 
	<br><img src="gambar/gambar12.7.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	<br><img src="gambar/gambar12.8.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	</td>
  </tr>
   <tr>
    <td class="tg-0pky">5. Bagian Logout
	<br>    
	<br>- Jika anda mengklik logout yang ada pada header
	<br><img src="gambar/gambar13.1.png" alt="Gambar Form Logout" style="width:600px;height:80px;"><br>
	<br>- Maka anda akan kembali ke halaman login
	<br><img src="gambar/gambar10.2.png" alt="Gambar Form Logout" style="width:300px;height:350px;"><br>
	</td>
  </tr>
  <tr>
</tbody>
</table>
</center>
</body>
</html>