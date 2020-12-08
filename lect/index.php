	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['LEVEL']==""){
		header("location:index.php?pesan=belum_login");
	}
 
	$koneksi = mysqli_connect("localhost","root","","penskri");
	
	?>
	
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard - Universitas Widyagama Malang</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Selamat Datang!</h5>
	  <span class="pull-right"><a href="logout.php" style="color: #f05a35"><strong><span>Logout</span></strong></a></span>
    </div>

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://cakqom.files.wordpress.com/2014/10/rd_logo_uwg_clr.png" alt="" width="72" height="72">
        <h2>Selamat datang!</h2>
        <p class="lead">Untuk Dosen Pembimbing diharap untuk memeriksa jadwal agar tidak ada yang berbentrokan. </p>
      </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Seminar Proposal</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Semester 6</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Mahasiswa Telah Menyelesaikan KPP</li>
              <li>Mahasiswa Sedang Menempuh MetPen</li>
			  <li>Mahasiswa Telah Menyelesaikan MetPen</li>
            </ul>
            <a href=#sempro><button type="button" class="btn btn-lg btn-block btn-primary">Data Sempro</button></a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Seminar Hasil</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Semester 7</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Mahasiswa Telah Menyelesaikan KPP</li>
			  <li>Mahasiswa Telah Menyelesaikan Sempro</li>
			  <li>Mahasiswa Telah Menyelesaikan MetPen</li>
            </ul>
            <a href=#semhas><button type="button" class="btn btn-lg btn-block btn-primary">Data Semhas</button></a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Ujian Skripsi</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Semester 8</h1>
            <ul class="list-unstyled mt-3 mb-4">
			  <li>Mahasiswa Telah Menyelesaikan Sempro</li>
			  <li>Mahasiswa Telah Menyelesaikan MetPen</li>
			  <li>Mahasiswa Telah Menyelesaikan Semhas</li>
            </ul>
            <a href=#ujianskripsi><button type="button" class="btn btn-lg btn-block btn-primary">Data Ujian Skripsi</button></a>
          </div>
        </div>
      </div>
	  
<p class=h2 id=sempro>Seminar Proposal</h6>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Judul</th>
      <th scope="col">Pembimbing</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  	$datasempro = mysqli_query($koneksi, "select * from mhs where LEVEL='mahasiswa'"); 
	
	$jumlah = mysqli_num_rows($datasempro);
	
	while ($baris = mysqli_fetch_assoc($datasempro)){

	echo "<tr>";
    echo "  <th scope='row'>".$baris['NAMA']."</th>";
    echo "  <td>".$baris['NIM']."</td>";
    echo "  <td>".$baris['JUSEM']."</td>";
    echo "  <td>".$baris['PEMSEM']."</td>";
    echo "</tr>";

	} 
 ?>
    
</table>

<span class="border-bottom-0"></span>

<p class=h2 id=semhas>Seminar Hasil</h6>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Judul</th>
      <th scope="col">Pembimbing</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  	$datasempro = mysqli_query($koneksi, "select * from mhs where LEVEL='mahasiswa'"); 
	
	$jumlah = mysqli_num_rows($datasempro);
	
	while ($baris = mysqli_fetch_assoc($datasempro)){

	echo "<tr>";
    echo "  <th scope='row'>".$baris['NAMA']."</th>";
    echo "  <td>".$baris['NIM']."</td>";
    echo "  <td>".$baris['JUHAS']."</td>";
    echo "  <td>".$baris['PEMHAS']."</td>";
    echo "</tr>";

	} 
 ?>
    
</table>

<p class=h2 id=daftarskripsi>Pendaftaran Skripsi</h6>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Judul</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  	$datasempro = mysqli_query($koneksi, "select * from mhs where LEVEL='mahasiswa'"); 
	
	$jumlah = mysqli_num_rows($datasempro);
	
	while ($baris = mysqli_fetch_assoc($datasempro)){

	echo "<tr>";
    echo "  <th scope='row'>".$baris['NAMA']."</th>";
    echo "  <td>".$baris['NIM']."</td>";
    echo "  <td>".$baris['JUSKRIP']."</td>";
    echo "  <td>".$baris['JURUSAN']."</td>";
    echo "</tr>";

	} 
 ?>
    
</table>

<p class=h2 id=ujianskripsi>Ujian Skripsi</h6>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Judul</th>
	  <th scope="col">Jurusan</th>
	  <th scope="col">Tempat</th>
	  <th scope="col">Jam</th>
	  <th scope="col">Tanggal</th>
	  <th scope="col">Penguji</th>
	  <th scope="col">Penguji</th>

    </tr>
  </thead>
  <tbody>
  <?php  
  	$datasempro = mysqli_query($koneksi, "select * from mhs where LEVEL='mahasiswa'"); 
	
	$jumlah = mysqli_num_rows($datasempro);
	
	while ($baris = mysqli_fetch_assoc($datasempro)){

	echo "<tr>";
    echo "  <th scope='row'>".$baris['NAMA']."</th>";
    echo "  <td>".$baris['NIM']."</td>";
    echo "  <td>".$baris['JUDULUJIANSKRIPSI']."</td>";
    echo "  <td>".$baris['JURUSAN']."</td>";
	echo "  <td>".$baris['TEMPAT']."</td>";
	echo "  <td>".$baris['JAM']."</td>";
	echo "  <td>".$baris['TANGGAL']."</td>";
	echo "  <td>".$baris['PENGUSKRIP1']."</td>";
	echo "  <td>".$baris['PENGUSKRIP2']."</td>";
    echo "</tr>";

	} 
 ?>
    
</table>

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
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
