<?php 

class mahasiswa{
	private $host;
	private $uname;
	private $pass;
	private $db;

	function __construct($w,$x,$y,$z){
		$this->host 	= $w;
		$this->uname 	= $x;
		$this->pass 	= $y;
		$this->db 		= $z;
	}
	function connect(){
		mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		//mysqli_select_db($this->db);
	}
	function tambah($nama, $nim){
		$sql = "INSERT INTO mahasiswa(nama,nim) VALUES('$nama','$nim')";
		$hasil = mysqli_query($sql);
		if ($hasil) {
			echo "Data Berhasl Disimpan ke Dtabase!".mysqli_connect();
		}else{
			echo "Data Gagal Disimpan ke Database".mysqli_error();
		}
	}
		//if ($conn) {
			//echo "Koneksi database berhasil!";
		//}else{
		//	echo "Koneksi database gagal".mysqli_error();
		//}
}

//$mahasiswa = new mahasiswa();

 ?>