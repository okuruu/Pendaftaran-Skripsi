<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Skripsi - Universitas Widyagama Malang</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	
	
</head>
<body>
	<br/>
	<br/>
	<section class="container">
	    <section class="login-form">
		
		<section>
			<img src="assets/images/logo.png" alt="pendaftaran skripsi universitas widyagama malang" />
		</section>
		
	<form method="post" action="cek_login.php" role=login>
		<div class="form-group">
				<label>NIM/NDP</label>
				<input type="text" name="username" placeholder="Masukkan NIM/NDP" class="form-control">
		</div>
		<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Masukkan password" class="form-control">
		</div>
				<input type="submit" value="Login" class="btn btn-outline-primary"> <a href=register.php><input type=button value=Daftar class='btn btn-primary'></a>
	</form>
	
			<section>
				<a href="#">&larr; Kembali</a>
			</section>
		
			</section>
	</section>
	
	<center>
	
		<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman dashboard";
		}
	}
	?>
	
	</center>
	
</body>

</html>