<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php"); 

	if(isset($_GET['id_user'])){
		$delete = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '".$_GET['id_user']." '");
		header('location:index.php?page=data_user');
	}
?>