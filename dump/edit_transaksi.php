<?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM pembayaran,petugas,spp where pembayaran.id_pembayaran='$id' AND pembayaran.id_petugas=petugas.id_petugas AND pembayaran.id_spp=spp.id_spp";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='transaksi.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='transaksi.php';</script>";
  }
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

        <h2>Edit Transaksi <?php echo $data['nisn']; ?></h2>
      <center>
      <form method="POST" action="proses_edittransaksi.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input type="text" name="id" value="<?php echo $data['id_pembayaran']; ?>"  hidden />
		<div>
          <label>Nama Petugas</label>
          <select name="nama_petugas" style="width: 357px;" disabled="disabled">
 
  <?php $idpetugas=$data ['id_petugas'];
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM petugas ORDER BY id_petugas ASC";
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
 <option value="<?php echo $row['id_petugas']; ?>" <?php if($row['id_petugas']=="$idpetugas"){?> selected="selected" <?php } ?>><?php echo $row['nama_petugas']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>
    </div>
	
        <div>
          <label>NISN</label>
          <input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" disabled="disabled"/>
        </div>
		
        <div>
          <label>Tanggal Bayar</label>
         <input type="date" name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>"/>
        </div>
		
		<div>
          <label>Bulan Bayar</label>
         <input type="text" name="bulan_dibayar" value="<?php echo $data['bulan_dibayar']; ?>"/>
        </div>
		
		<div>		
          <label>Tahun Bayar</label>
           <input type="text" name="tahun_dibayar" value="<?php echo $data['tahun_dibayar']; ?>" disabled="disabled"/>
        </div>
		
		<div>
          <label>SPP Per Bulan</label>
          <select name="nisn" style="width: 357px;" disabled="disabled">
  <?php
  $id_spp = $data['id_spp']; 
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
 <option class="bg-dark" value="<?php echo $row['id_spp']; ?>" <?php if($row['id_spp']=="$id_spp"){?> selected="selected" <?php } ?>><?php echo $row['nominal']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>      
	    </div>
		
		<div>
          <label>Jumlah Bayar</label>
          <input type="text" name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']; ?>"/>
        </div>        
	<br>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
</body>
</html>
