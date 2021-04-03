<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
;
?>
<!DOCTYPE html>
<html>
<body>

	<?php

  include ('header2.php');
?>

	<center>
    <h2>Data SISWA</h2>
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
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" placeholder="Masukan NIS"/>
    <button type="submit">Cari</button>
    </div>
	</center>
    </form>
	<a class="btn btn-primary" href="tambah_siswa.php" role="button">+ &nbsp;Tambah Siswa</a>
    <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">NISN</th>
          <th scope="col">NIS</th>
		  <th scope="col">Nama Siswa</th>
		  <th scope="col">Kelas</th>
		  <th scope="col">Alamat</th>
		  <th scope="col">No Telpon</th>
		  <th scope="col">Tahun Masuk</th>
		  <th scope="col">SPP per bulan</th>

          <th>Action</th>
        </tr>
    </thead>
    <tbody>
	<?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $query="select * from siswa,spp,kelas where siswa.nis like '%".$kata_kunci."%' AND siswa.id_spp=spp.id_spp AND siswa.id_kelas=kelas.id_kelas order by nis asc";;

        }else {
            $query="select * from siswa,spp,kelas where siswa.id_spp=spp.id_spp AND siswa.id_kelas=kelas.id_kelas order by nis asc";
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
          <td><?php echo $row['nisn']; ?></td>
		  <td><?php echo $row['nis']; ?></td>
		  <td><?php echo $row['nama']; ?></td>
		  <td><?php echo $row['nama_kelas']; ?></td>
		  <td><?php echo $row['alamat']; ?></td>
		  <td><?php echo $row['no_telp']; ?></td>
		  <td><?php echo $row['tahun']; ?></td>
          <td><?php echo substr($row['nominal'], 0, 20); ?></td>
          <td>
              <a href="edit_siswa.php?id=<?php echo $row['nisn']; ?>">Edit</a> |
              <a href="proses_hapussiswa.php?id=<?php echo $row['nisn']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>

      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</body>
</html>
