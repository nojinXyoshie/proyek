<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php"); 

	if(isset($_GET['id_pelajaran'])){
		$delete = mysqli_query($koneksi, "DELETE FROM pelajaran WHERE Id_pelajaran = '".$_GET['id_pelajaran']." '");
		header('location:index.php?page=kelola_pel');
	}
?>