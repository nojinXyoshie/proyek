<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php"); 

	if(isset($_GET['id_admin'])){
		$delete = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin = '".$_GET['id_admin']." '");
		header('location:index.php?page=data_admin');
	}
?>