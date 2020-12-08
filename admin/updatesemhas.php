<?php 
$koneksi = mysqli_connect("localhost","root","","penskri");

// Check connection
if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$judul = $_POST['judulsemhas'];
$dospem = $_POST['dospem'];

// Attempt update query execution
$sql = "UPDATE mhs SET NAMA='$nama', JUHAS='$judul',PEMHAS='$dospem' WHERE NIM='$nim'";
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
      <meta http-equiv = "refresh" content = "1; url = semhas.php" />
   </head>