<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pendaftaran Skripsi Online Universitas Widyagama Malang">
    <meta name="author" content="Universitas Widyagama Malang">
	
	<title>Dashboard - Universitas Widyagama Malang</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	    <script type=javascript>
		
		function tutup(){
			window.close;
			}
		
		
		</script>
</head>
<body class='bg-light'>
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	
	<?php
	// Off the way we go wkwk
	$koneksi = mysqli_connect("localhost","root","","penskri");
	
	$NIM = $_SESSION['username'];


	?>
	
     <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://cakqom.files.wordpress.com/2014/10/rd_logo_uwg_clr.png" alt="" width="72" height="72">
        <h2>Selamat datang!</h2>
        <p class="lead">Sebagai awalan, kami mengucapkan selamat karena anda telah sampai pada tahap ini. Jika ini kunjungan pertama anda, silahkan isi form di bawah terlebih dahulu. </p>
      </div>

	<div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Jurusan <?php $cekz = mysqli_query($koneksi,"select * from mhs where NIM='$NIM'");$jumlah = mysqli_num_rows($cekz);while($baris = mysqli_fetch_assoc($cekz)){echo $baris['FAK']." ";echo $baris['JURUSAN'];}?></h6>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark"><?php echo $_SESSION['username']; ?></strong>
            </div>
            <span class="d-block"><?php ?><?php $cekz = mysqli_query($koneksi,"select * from mhs where NIM='$NIM'");$jumlah = mysqli_num_rows($cekz);while($baris = mysqli_fetch_assoc($cekz)){echo $baris['NAMA'];}?></span>
          </div>
        </div>
	
	<p>
	<p>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Menu</span>
            <span class="badge badge-secondary badge-pill">5</span>
          </h4>
          <ul class="list-group mb-3">
		    <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Biodata Mahasiswa</h6>
                <small>Isian Data Diri</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a href=sempro.php><h6 class="my-0">Seminar Proposal</h6></a>
                <small class="text-muted">Paralel Semester 6</small>
              </div>
			  <span class="glyphicon glyphicon-menu-right"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a href=semhas.php><h6 class="my-0">Seminar Hasil</h6></a>
                <small class="text-muted">Paralel Semester 8</small>
              </div>
			  <span class="glyphicon glyphicon-menu-right"></span>
            </li>
			            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
               <a href='daftarskripsi.php'><h6 class="my-0">Daftar Skripsi</h6></a>
                <small class="text-muted">Paralel Semester</small>
              </div>
			  <span class="glyphicon glyphicon-menu-right"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
               <a href='ujianskripsi.php'><h6 class="my-0">Ujian Skripsi</h6></a>
                <small class="text-muted">Paralel Semester</small>
              </div>
			  <span class="glyphicon glyphicon-menu-right"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
             <a href="logout.php" style="color: #f05a35"><strong><span>Logout</span></strong></a>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Kode">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Masukkan Kode</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Informasi Mahasiswa</h4>
          <form class="needs-validation" action="update.php" method=post>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $_SESSION['username']; ?>"  readonly name=nim>
                <div class="invalid-feedback" style="width: 100%;">
                  Nama Induk Mahasiswa anda adalah :   
                </div>
              </div>

            </div>

            <div class="mb-3">
              <label for="username">Nama Lengkap</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" id="username" placeholder="Contoh : Adiska Sisriandi"  name=nama>
                <div class="invalid-feedback" style="width: 100%;">
                  Nama anda adalah :  .
                </div>
              </div>

            </div>

            <div class="mb-3">
              <label for="phone">Nomor WhatsApp <span class="text-muted">(Wajib Aktif)</span></label>
              <input type="number" class="form-control" id="phone" placeholder="Contoh : 0898-4170-521" name=nohp>
              <div class="invalid-feedback">
                Tolong masukkan nomor yang valid
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Alamat Saat Ini</label>
              <input type="text" class="form-control" id="address" placeholder="Contoh : Jl. Surabaya No. 34"  name=alamat>
              <div class="invalid-feedback">
                Tolong masukkan alamat yang valid
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Tempat Tanggal Lahir<span class="text-muted">(Wajib Diisi)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Contoh : Pekanbaru, 12 Januari 1995"  name=ttl>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
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
              <div class="col-md-4 mb-3">
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
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address" style="color:red">Dengan ini saya menyatakan bahwa saya telah mengisi data dengan sebenar-benarnya</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info" style="color:red">Dengan ini saya menyatakan bahwa saya akan mematuhi regulasi seminar yang ditetapkan oleh kampus</label>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Update Data</button> <br>						
			<hr class="mb-4">
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">©2019 Universitas Widyagama Malang</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="http://widyagama.net/v4/mahasiswa/login.php">SIM</a></li>
          <li class="list-inline-item"><a href="https://widyagama.ac.id/r2012">Website</a></li>
          <li class="list-inline-item"><a href="https://www.facebook.com/Universitas-Widyagama-Malang-231050206977572/">Facebook</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src=".https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>

</body>
</html>