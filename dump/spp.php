<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
  <head><link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title></title>

  </head>
<body>

	<?php

  include ('header2.php');
?>

	<center>
    <h2>Data SPP</h2>
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
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" placeholder="Masukan Tahun"/>
    <button type="submit">Cari</button>
    </div>
	</center>
    </form>
	<a class="btn btn-primary" href="tambah_spp.php" role="button">+ &nbsp;Tambah SPP</a>
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Tahun </th>
        <th scope="col">Nominal</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
     <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $query="select * from spp where id_spp like '%".$kata_kunci."%' or tahun like '%".$kata_kunci."%' order by id_spp asc";

        }else {
            $query="select * from spp order by id_spp asc";
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
          <td><?php echo $row['tahun']; ?></td>
          <td><?php echo substr($row['nominal'], 0, 20); ?></td>
          <td>
              <a href="edit_spp.php?id=<?php echo $row['id_spp']; ?>">Edit</a> |
              <a href="proses_hapusspp.php?id=<?php echo $row['id_spp']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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
