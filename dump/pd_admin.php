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
<h2>Panduan ADMIN</h2>
<table class="tg">
<tbody>
<thead>
<tr>
    <th class="tg-0pky">
	<center><b>PETUNJUK</b></center>
	</th>
  </tr>
  <thead>
   <tr>
    <th class="tg-0pky">1. Login terlebih dahulu sebagai admin, ketika anda login sistem akan mengecek melalui "username" apakah anda admin/petugas
	<br><img src="gambar/gambar1.png" alt="Gambar Login" style="width:200px;height:200px;">
	</th>
  </tr>
  <tr>
    <td class="tg-0pky">2. Admin bisa mengakses semua yang ada pada website spp, seperti mengakses data spp, kelas, siswa, dll dan juga bisa membuat, menambah, mengedit dan menghapus data
	<br> <img src="gambar/gambar2.png" alt="Gambar Form Login" style="width:400px;height:80px;">
	<br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">3. Bagian Dashboard Admin
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian ini tidak berisi apa-apa, hanya halaman awal ketika anda berhasil login
	<br> <img src="gambar/gambar3.png" alt="Gambar Form Admin" style="width:500px;height:150px;" >
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">4. Bagian SPP
	<br>- Untuk melihat bagian SPP klik pada header yang bernama "SPP"
	<br> <img src="gambar/gambar4.0.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Tersedia kolom pencarian, tambah spp, edit, dan hapus
	<br> <img src="gambar/gambar4.1.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Terdapat juga baris yang terdiri dari no, tahun, nominal dan action
	<br> <img src="gambar/gambar4.2.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Ketikan tahun berapa untuk mencari data spp pada tahun tersebut
	<br> <img src="gambar/gambar4.3.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Klik pada bagian "+ SPP" untuk menambah data spp
	<br> <img src="gambar/gambar4.4.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Dibagian ini isi kolom tahun dan nominal jika sudah klik "Simpan SPP"
	<br> <img src="gambar/gambar4.5.png" alt="Gambar Form SPP" style="width:600px;height:250px;"><br>
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data spp
	<br> <img src="gambar/gambar4.6.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Disini anda bisa mengedit data spp namun di spp ini hanya bisa mengedit nominal nya saja tidak dengan tahun, jika sudah klik "Simpan Perubahan"
	<br> <img src="gambar/gambar4.7.png" alt="Gambar Form SPP" style="width:500px;height:200px;"><br>
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action 
	<br> <img src="gambar/gambar4.8.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	<br>- Maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	<br> <img src="gambar/gambar4.9.png" alt="Gambar Form SPP" style="width:600px;height:200px;"><br>
	</td>
  </tr>
    <tr>
    <td class="tg-0pky">5. Bagian Kelas
	<br>- Untuk melihat bagian kelas klik pada header yang bernama "Kelas"
	<br> <img src="gambar/gambar5.1.png" alt="Gambar Form Kelas" style="width:600px;height:300px;"><br>
	<br>- Tersedia kolom pencarian, tambah kelas, edit dan hapus
	<br> <img src="gambar/gambar5.2.png" alt="Gambar Form Kelas" style="width:600px;height:300px;"><br>
	<br>- Terdapat juga baris yang terdiri dari no, nama kelas, kompetensi keahlian dan action
	<br> <img src="gambar/gambar5.3.png" alt="Gambar Form Kelas" style="width:600px;height:300px;"><br>
	<br>- Ketikan kelas  apa/berapa untuk mencari data kelas 
	<br> <img src="gambar/gambar5.4.png" alt="Gambar Form Kelas" style="width:600px;height:200px;"><br>
	<br>- Klik pada bagian "+ Kelas" untuk menambah data kelas
	<br> <img src="gambar/gambar5.5.png" alt="Gambar Form Kelas" style="width:500px;height:250px;"><br>
	<br>- Dibagian ini isi kolom nama kelas dan kompetensi keahlian jika sudah klik "Simpan KELAS"
	<br> <img src="gambar/gambar5.6.png" alt="Gambar Form Kelas" style="width:600px;height:250px;"><br>
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data kelas
	<br> <img src="gambar/gambar5.7.png" alt="Gambar Form Kelas" style="width:600px;height:300px;"><br>
	<br>- Disini anda bisa mengedit data kelas seperti merubah nama kelas dan kompetensi keahlian, jika sudah klik "Simpan Perubahan"
	<br> <img src="gambar/gambar5.8.png" alt="Gambar Form Kelas" style="width:600px;height:250px;"><br>
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action
	<br> <img src="gambar/gambar5.9.png" alt="Gambar Form Kelas" style="width:600px;height:300px;"><br>
	<br>- Maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	<br> <img src="gambar/gambar5.10.png" alt="Gambar Form Kelas" style="width:500px;height:300px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">6. Bagian Pengguna
	<br>- Untuk melihat bagian pengguna klik pada header yang bernama "Pengguna"
	<br> <img src="gambar/gambar6.1.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Tersedia kolom pencarian, tambah pengguna, edit dan hapus
	<br> <img src="gambar/gambar6.2.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Terdapat juga baris yang terdiri dari no, username, password, nama pengguna dan action, disini password saya hidden (disembunyikan) karna bersifat privasi walaupun admin bisa mengakses nya
	<br> <img src="gambar/gambar6.3.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Ketikan username untuk mencari data penguna
	<br> <img src="gambar/gambar6.4.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Klik pada bagian "+ Pengguna" untuk menambah data pengguna
	<br> <img src="gambar/gambar6.5.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Dibagian ini isi kolom username, password, nama pengguna dan pilih level jika sudah klik "Simpan PENGGUNA"
	<br> <img src="gambar/gambar6.6.png" alt="Gambar Form Pengguna" style="width:600px;height:300px;"><br>
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data pengguna
	<br> <img src="gambar/gambar6.7.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Disini anda bisa mengedit data pengguna seperti merubah username, password, nama pengguna dan level, jika sudah klik "Simpan Perubahan"
	<br> <img src="gambar/gambar6.8.png" alt="Gambar Form Pengguna" style="width:600px;height:300px;"><br>
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action
	<br> <img src="gambar/gambar6.9.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	<br>- Maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja\
	<br> <img src="gambar/gambar6.10.png" alt="Gambar Form Pengguna" style="width:600px;height:200px;"><br>
	</td>
  </tr>
    <tr>
    <td class="tg-0pky">7. Bagian Siswa
	<br>- Untuk melihat bagian siswa klik pada header yang bernama "Siswa"
	<br><img src="gambar/gambar7.1.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Tersedia kolom pencarian, tambah siswa, edit dan hapus
	<br><img src="gambar/gambar7.2.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Terdapat juga baris yang terdiri dari no, nisn, nis, nama siswa, kelas, alamat, no telepon, tahun masuk dan action
	<br><img src="gambar/gambar7.3.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Ketikan nis untuk mencari data siswa
	<br><img src="gambar/gambar7.4.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Klik pada bagian "+ Siswa" untuk menambah data siswa
	<br><img src="gambar/gambar7.5.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Dibagian ini isi kolom nisn, nis, nama siswa, kelas, alamat, no telepon dan tahun masuk jika sudah klik "Simpan SISWA"
	<br><img src="gambar/gambar7.6.png" alt="Gambar Form Siswa" style="width:600px;height:400px;"><br>
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data siswa
	<br><img src="gambar/gambar7.7.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Disini anda bisa mengedit data siswa seperti merubah nama siswa, kelas, alamat dan no telepon, untuk nisn, nis dan tahun masuk saya disabled (tidak bisa dirubah) karna bersifat permanen, jika sudah klik "Simpan Perubahan". Jika ada peringatan tidak menghapus data kemungkinan data tersebut sudah ter foreign key di tabel/data lain
	<br><img src="gambar/gambar7.8.png" alt="Gambar Form Siswa" style="width:600px;height:400px;"><br>
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action
	<br><img src="gambar/gambar7.9.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	<br>- Maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	<br><img src="gambar/gambar7.10.png" alt="Gambar Form Siswa" style="width:600px;height:170px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">8. Bagian Transaksi Pembayaran
	<br>- Untuk melihat bagian transaksi pembayaran klik pada header yang bernama "Transaksi Pembayaran"
	<br><img src="gambar/gambar8.1.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Tersedia kolom pencarian, tambah Transaksi Pembayaran, edit dan hapus
	<br><img src="gambar/gambar8.2.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Terdapat juga baris yang terdiri dari no, nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan, jumlah bayar dan action
	<br><img src="gambar/gambar8.3.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Ketikan nisn untuk mencari data transaksi pembayaran
	<br><img src="gambar/gambar8.4.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Klik pada bagian "+ Transaksi" untuk menambah data transaksi pembayaran
	<br><img src="gambar/gambar8.5.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Dibagian ini isi kolom nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan dan jumlah bayar jika sudah klik "Simpan TRANSAKSI"
	<br><img src="gambar/gambar8.6.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:400px;"><br>
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data transaksi pembayaran
	<br><img src="gambar/gambar8.7.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Disini anda bisa mengedit data transaksi pembayaran seperti merubah tanggal bayar, bulan bayar dan jumlah bayar, untuk nama petugas, nisn tahun bayar dan spp per bulan saya disabled (tidak bisa dirubah) karna bersifat permanen, jika sudah klik "Simpan Perubahan. Jika ada peringatan tidak menghapus data kemungkinan data tersebut sudah ter foreign key di tabel/data lain
	<br><img src="gambar/gambar8.8.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:400px;"><br>
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action 
	<br><img src="gambar/gambar8.9.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	<br>- Maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	<br><img src="gambar/gambar8.10.png" alt="Gambar Form Transaksi Pembayaran" style="width:600px;height:170px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">9. Bagian Laporan
	<br>- Berisi dua form yaitu "Laporan Transaksi" dan "Laporan Data Siswa"
	<br><img src="gambar/gambar9.1.png" alt="Gambar Form Laporan" style="width:800px;height:150px;"><br>
	<br>- Jika mengklik laporan transaksi maka anda akan diperintahkan untuk mengisi data tanggal/bulan/tahun untuk mengetahui Laporan yang sudah membayar spp pada tanggal/bulan/tahun tersebut, jika sudah mengisinya klik "Export ke Word"
	<br><img src="gambar/gambar9.2.png" alt="Gambar Form Laporan" style="width:800px;height:300px;"><br>
	<br>- Maka akan otomatis terdownload dalam bentuk file "data-transaksi.word" dan menampilkan data pembayaran spp sesuai dengan tanggal/bulan/tahun yang dimasukkan
	<br><img src="gambar/gambar9.3.png" alt="Gambar Form Laporan" style="width:600px;height:400px;"><br>
	<br>- Jika mengklik "Laporan Data Siswa" maka akan diperintahkan untuk mengisi data kelas dan tahun untuk mengetahui data siswa dari kelas tersebut dan pada tahun tersebut, jika sudah mengisinya klik "Export ke Excel"
	<br><img src="gambar/gambar9.4.png" alt="Gambar Form Laporan" style="width:600px;height:250px;"><br>
	<br>- Maka akan otomatis terdownload dalam bentuk file "data-siswa.xls" dan menampilkan data siswa pada kelas dan tahun sesuai yang diisikan
	<br><img src="gambar/gambar9.5.png" alt="Gambar Form Laporan" style="width:600px;height:400px;"><br>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">10. Bagian Logout
	<br>- Jika anda mengklik logout yang ada pada header
	<br><img src="gambar/gambar10.1.png" alt="Gambar Form Logout" style="width:600px;height:100px;"><br>
	<br>- Maka anda akan kembali ke halaman login/keluar dari halaman
	<br><img src="gambar/gambar10.2.png" alt="Gambar Form Logout" style="width:300px;height:350px;"><br>
	</td>
  </tr>
  <tr>
  </tr>
</tbody>
</table>
</center>
</body>
</html>