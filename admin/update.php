<?php 
$koneksi = mysqli_connect("localhost","root","","penskri");

// Check connection
if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$ttl =  $_POST['ttl'];
$fak = $_POST['fak'];
$jurusan = $_POST['jurusan'];

// Attempt update query execution
$sql = "UPDATE mhs SET NAMA='$nama', NOHP='$nohp', ALAMAT='$alamat', TTL='$ttl', FAK='$fak', JURUSAN='$jurusan' WHERE NIM='$nim'";
if(mysqli_query($koneksi, $sql)){
		echo "Records were updated successfully.";
	} else {
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
	}
 
// Close connection
mysqli_close($koneksi);

?>

<!DOCTYPE html>
<html>
   <head>
      <title>HTML Meta Tag</title>
      <meta http-equiv = "refresh" content = "1; url = index.php" />
   </head>