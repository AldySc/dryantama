<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>




	</div>

	</div>
	    <div class="container">
	      <div class="row justify-content-center mt-5">
	        <div class="col-md-4">
	          <div class="card">
	            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Login <span class="font-weight-bold text-primary">SPP</span></h5></div>
	            <div class="card-body">
	              <form action="cek_login.php" method="post">
	                <div class="form-group">
	                  <input type="text" name="username" class="form-control" placeholder="Username" required="required">
	                </div>
	                <div class="form-group">
	                  <input type="password" name="password" class="form-control" placeholder="Password" required="required">
	                </div>					
									<center>
									<?php
									if(isset($_GET['pesan'])){
										if($_GET['pesan']=="gagal"){
											echo "<font color='red'>Username dan Password tidak sesuai !</font>";
										}
										if($_GET['pesan']=="belummasuk"){
											echo "<font color='red'>Anda belum login !</font>";
										}
									}
									?>
								</center>
	                <div class="form-group">
	                  <input type="submit" value="LOGIN" class="btn btn-primary btn-block">
	                </div>
					<li>
                <a href="siswa/index.php">Beralih ke siswa</a>
              </li>
			  <li>
                <a href="panduan.php">Panduan</a>
              </li>
	              </form>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

</body>
</html>
