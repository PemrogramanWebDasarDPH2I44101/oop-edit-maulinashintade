<?php 

class Kalkulator(){
	private $conn;

	public function Kalkulator(){
		$servername		= "localhost";
		$username		= "root";
		$password		= "";
		$db				= "tugas";
		$this->conn 	= mysqli_connect($servername,$username,$password,$db);
	}
	public function tambah(){
		$angka1	= $_POST['input1'];
		$angka2	= $_POST['input2'];
		$sql	= "INSERT INTO siswa(nama,nim) VALUES ('$angka1','$angka2')";
		mysqli_query($this->conn, $sql);
	}
	public function kurang(){
		$angka1	= $_POST['input1'];
		$angka2	= $_POST['input2'];
		$sql	= "DELETE FROM siswa WHERE nim=angka2)";
		mysqli_query($this->conn, $sql);	
	}
	public function bagi(){
		$sql = "SELECT * FROM siswa";
		return mysqli_query($this->conn, $sql);
	}
 }
 $operasi = $_POST['operasi'];
 $kalkulator = new Kalkulator();
 if ($operasi == "+")
 	$kalkulator ->tambah();
 if ($operasi == "-")
 	$kalkulator ->kurang();
 if ($operasi == "/")
 	$result = $kalkulator ->bagi();
 include_once("data.php;")
 }
?>
