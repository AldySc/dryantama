<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * 
      h1 {
        text-transform: uppercase;
        color: #007bff;
      }
	  h3 {
        text-transform: uppercase;
        color: #007bff;
      }
	  h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: #007bff;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #007bff;
    }
	select {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #007bff;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
	  
    </style>
  </head>
<body>
  <?php
  include ('header2.php');
?>

      <center>
        <h2>Tambah Transaksi</h2>
      <center>
      <form method="POST" action="proses_tambahtransaksi.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Petugas</label>
          <select name="nama_petugas" style="width: 357px;">
 <option value="not_option"> Silahkan Pilih Nama Petugas</option>
  <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM petugas ORDER BY nama_petugas ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
 <option value="<?php echo $row['id_petugas']; ?>"><?php echo $row['nama_petugas']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>
        
	    </div>
		<div>
          <label>NISN</label>
          <select name="nisn" style="width: 357px;">
 <option value="not_option"> Silahkan Pilih NISN</option>
  <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM siswa ORDER BY nisn ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
 <option value="<?php echo $row['nisn']; ?>"><?php echo $row['nisn']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>      
	    </div>
		
        <div>		
          <label>Tanggal Bayar</label>
          <input type="date" name="tanggal_bayar" autofocus="" required="" />
        </div>
		
         <div>
          <label>Bulan Bayar</label>
         <input type="text" name="bulan_dibayar" required=""/>
        </div>
		
		<div>		
          <label>Tahun Bayar</label>
          <input type="date" name="tahun_dibayar" autofocus="" required="" />
        </div>
		
		<div>
          <label>SPP Per Bulan</label>
          <select name="spp" style="width: 357px;">
 <option value="not_option"> Silahkan Pilih SPP Per Bulan</option>
  <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM spp ORDER BY nominal ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
 <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['nominal']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>      
	    </div>
		
		<div>
          <label>Jumlah Bayar</label>
         <input type="text" name="jumlah_bayar" required=""/>
        </div>
		
		<br>
        <div>
         <button type="submit">Simpan TRANSAKSI</button>
        </div>
        </section>
      </form>
</body>
</html>
