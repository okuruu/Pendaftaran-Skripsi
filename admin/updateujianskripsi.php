<?php 
$koneksi = mysqli_connect("localhost","root","","penskri");

// Check connection
if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$judul = $_POST['judulskripsi'];
$tempat = $_POST['tempat'];
$date = $_POST['date'];
$time = $_POST['time'];
$penguji1 = $_POST['penguji1'];
$penguji2 = $_POST['penguji2'];

// Attempt update query execution
$sql = "UPDATE mhs SET NAMA='$nama', JUDULUJIANSKRIPSI='$judul',TEMPAT='$tempat',JAM='$time',TANGGAL='$date',PENGUSKRIP1='$penguji1',PENGUSKRIP2='$penguji2' WHERE NIM='$nim'";
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
      <meta http-equiv = "refresh" content = "1; url = ujianskripsi.php" />
   </head>