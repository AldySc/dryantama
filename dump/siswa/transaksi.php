<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
;
?>
<!DOCTYPE html>
<html>
<body>

	<?php

  include ('header.php');
?>

	<center>
    <h2>History Transaksi Pembayaran</h2>
	</center>
	 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	 <center>
    <div>
       
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" placeholder="Masukan NISN" required="required"/>
    <button type="submit">Cari</button>
    </div>
	</center>
    </form> <br>
    <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">NISN</th>
		  <th scope="col">Tanggal Bayar</th>
		  <th scope="col">Bulan Bayar</th>
		  <th scope="col">Tahun Bayar</th>
		  <th scope="col">SPP Per Bulan</th>
		  <th scope="col">Jumlah Bayar</th>
        </tr>
    </thead>
    <tbody>
	<?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $query="select * from pembayaran,petugas,spp,siswa where pembayaran.nisn=siswa.nisn AND pembayaran.id_petugas=petugas.id_petugas AND siswa.id_spp=spp.id_spp AND pembayaran.nisn  like '%".$kata_kunci."%'";

        }else {
            $query="select * from pembayaran,petugas,spp where pembayaran.id_petugas=petugas.id_petugas AND pembayaran.id_spp=spp.id_spp order by nisn asc";
        }

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
      
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_petugas']; ?></td>
		  <td><?php echo $row['nisn']; ?></td>
		  <td><?php echo $row['tgl_bayar']; ?></td>
		  <td><?php echo $row['bulan_dibayar']; ?></td>
		  <td><?php echo $row['tahun_dibayar']; ?></td>
		  <td><?php echo substr($row['nominal'], 0, 20); ?></td>
          <td><?php echo $row['jumlah_bayar']; ?></td>
      </tr>

      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</body>
</html>
