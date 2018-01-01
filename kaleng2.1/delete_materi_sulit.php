<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php"); 

	if(isset($_GET['id_materi'])){
		$delete = mysqli_query($koneksi, "DELETE FROM materi_sulit WHERE id_materi = '".$_GET['id_materi']." '");
		header('location:index.php?page=upload_materi_sulit');
	}
?>