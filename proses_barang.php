<?php 
include('koneksi.php');
$koneksi = new database();
$servername = "localhost";
$username = "root";
$password = "";
$database = "oopcrud";
$conn = new mysqli($servername, $username, $password, $database);
$action = $_GET['action'];
$Nis = $_POST['Nis'];

  $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM data WHERE Nis='$Nis'"));
    if ($cek > 0){
    echo "<script>window.alert('NIS yang anda masukan sudah ada')
    window.location='add_data.php'</script>";
    }else{
    $koneksi->tambah_data($_POST['Nis'],$_POST['MTK'],$_POST['Inggris'],$_POST['DPK']);
    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='show_data.php'</script>";
  }

// if($action == "add")
// {
// 	$koneksi->tambah_data($_POST['Nis'],$_POST['MTK'],$_POST['Inggris'],$_POST['DPK']);
// 	header('location:show_data.php');
// }
// else{
// 	echo '<script>alert("Gagal")</script>';
// 	header('location:_data.php');
// }

?>