<?php 

//include "db.php";

$host 	= "localhost";
$uname	= "root";
$pass	= "";
$db		= "tugas";

$conn = new mysqli($host,$uname,$pass,$db);
if ($conn->connect_error) {
	die("Koneksi Eror:". $conn->connect_error);
}
$nama       	= $_POST['nama'];
$nim        	= $_POST['nim'];
$sql = "INSERT INTO mahasiswa(nama,nim) VALUES('$nama','$nim')";
if ($conn->query($sql)=== TRUE) {
	echo "Berhasil";
	echo "<br>";
}else{
	echo "Gagal".$conn->error;
}
?>
<a href="tampil.php">Tampilkan Data Anda</a>
