<?php 
include ('koneksi.php');
$db = new database();
$aksi = $_GET['action'];
  if($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:show_data.php");
 }
 
?>