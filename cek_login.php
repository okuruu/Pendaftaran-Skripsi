<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from mhs where NIM='$username' and PW='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	
	$data = mysqli_fetch_assoc($login);
	
	if($data['LEVEL']=="dosen"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['LEVEL'] = "dosen";
		// alihkan ke halaman dashboard admin
		header("location:lect/index.php");
	}
	
	else {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin/index.php");
	}
	
	
}else{
	header("location:index.php?pesan=gagal");
}
?>