<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "oopcrud";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM data");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tambah_data($Nis, $MTK, $Inggris, $DPK)
	{
		mysqli_query($this->koneksi,"INSERT INTO data Values ('$Nis','$MTK','$Inggris','$DPK')");
	}
	function hapus($Nis){
		mysqli_query($this->koneksi,"DELETE FROM data WHERE Nis='$Nis'");
	}
	
	
// 	public function update($Nis)
//  {
//   $res = mysqli_query($this->"UPDATE $data SET MTK='$MTK', Inggris='$Inggris', DPK='$DPK' WHERE Nis=".$Nis);
//   return $res;
//  }
}
// class rata{
// 	function rata($rata){
// 		$MTK = $_POST['MTK'];
//     $Inggris = $_POST['Inggris'];
//     $DPK = $_POST['DPK'];
//     $total = $MTK + $Inggris + $DPK;
//     $rata = $total / 3;
// 		return $rata;
// 	}
// }
?>