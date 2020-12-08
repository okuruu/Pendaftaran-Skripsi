<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Skripsi - Universitas Widyagama Malang</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
		
	<form method="post" action="success.php" role=login>
		<div class="form-group">
				<label>NIM</label>
				<input type="text" name="nim" placeholder="Contoh : 161552018150046" class="form-control">
		</div>
		<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" placeholder="Contoh : Adiska Sisriandi" class="form-control">
		</div>
				<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Masukkan password" class="form-control">
		</div>
			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Fakultas</label>
                <select class="custom-select d-block w-100" id="country" name=fak>
                  <option>Pilih Salah Satu</option>
                  <option value=Teknik>Teknik</option>
				  <option value=Ekonomi>Ekonomi</option>
				  <option value=Pertanian>Pertanian</option>
				  <option value=Hukum>Hukum</option>
                </select>
                <div class="invalid-feedback">
                  Pilih Fakultas yang valid.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="state">Jurusan</label>
                <select class="custom-select d-block w-100" id="state" name=jurusan>
                  <option>Pilih Salah Satu</option>
                  <option value="Informatika">Informatika</option>
				  <option value="Sipil">Sipil</option>
				  <option value="Elektro">Elektro</option>
				  <option value="Industri">Industri</option>
                </select>
                <div class="invalid-feedback">
                  Pilih Jurusan yang valid.
                </div>
              </div>
            </div>
			
				<input type="submit" value="Daftar" class="btn btn-outline-primary">
	</form>
	
			<section>
				<a href="index.php">&larr; Kembali</a>
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