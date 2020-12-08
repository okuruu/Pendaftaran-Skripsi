<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pendaftaran Skripsi Online Universitas Widyagama Malang">
    <meta name="author" content="Universitas Widyagama Malang">
	
	<title>Seminar Hasil - Universitas Widyagama Malang</title>
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
        <h2>Seminar Hasil</h2>
        <p class="lead">Untuk dapat mengajukan <strong><i>Seminar Hasil</i></strong>, maka anda harus menempuh Mata Kuliah <i>Seminar Proposal</i> sebagai syarat untuk dapat menempuh <i>Seminar Hasil</i>.</p>
      </div>

	<div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-gray mb-0">Judul Seminar Hasil 	:  <font color=red><i><?php $cekz = mysqli_query($koneksi,"select * from mhs where NIM='$NIM'");$jumlah = mysqli_num_rows($cekz);while($baris = mysqli_fetch_assoc($cekz)){echo $baris['JUHAS'];}?></i></font></h6>
		<h6 class="border-bottom border-gray pb-2 mb-0">Dosen Pembimbing	:  <font color=red><i><?php $cekz = mysqli_query($koneksi,"select * from mhs where NIM='$NIM'");$jumlah = mysqli_num_rows($cekz);while($baris = mysqli_fetch_assoc($cekz)){echo $baris['PEMHAS'];}?></i></font></h6>
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
              <div class="text-muted">
                <a href=index.php><h6 class="my-0">Biodata Mahasiswa</h6></a>
                <small>Isian Data Diri</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class=text-muted>
                <a href=sempro.php><h6 class="my-0">Seminar Proposal</h6></a>
                <small class="text-muted">Paralel Semester 6</small>
              </div>
			  <span class="glyphicon glyphicon-menu-right"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class=text-success>
                <h6 class="my-0">Seminar Hasil</h6>
                <small class="text-success">Paralel Semester 8</small>
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
          <h4 class="mb-3">Form Pengajuan Seminar Hasil</h4>
          <form class="needs-validation" action="updatesemhas.php" method=post>
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
              <label for="judul">Judul Seminar Hasil Yang Diajukan</label>
              <input type="text" class="form-control" id="judul" placeholder="Contoh : Implementasi Algoritma Fuzzy Pada Perpustakaan Kota Malang"  name=judulsemhas>
              <div class="invalid-feedback">
                Tolong masukkan judul yang valid
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Dosen Pembimbing</label>
                <select class="custom-select d-block w-100" id="country" name=dospem>
                  <option>Pilih Salah Satu</option>
                  <option value='Dr. Istiadi, ST., MT.'>Dr. Istiadi, ST., MT.</option>
				  <option value='Fitri Marisa, S.Kom, M.Pd.'>Fitri Marisa, S.Kom, M.Pd.</option>
				  <option value='Firman Nurdiyansyah, S.Kom,. M.M'>Firman Nurdiyansyah, S.Kom,. M.M</option>
                </select>
                <div class="invalid-feedback">
                  Pilih Dosen Pembimbing yang valid.
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
            <button class="btn btn-primary btn-lg btn-block" type="submit">Ajukan Data Seminar Hasil</button> <br>						
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