<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php"); 

	if(isset($_GET['no'])){
		$delete = mysqli_query($koneksi, "DELETE FROM t_soal WHERE no = '".$_GET['no']." '");
		header('location:index.php?page=kelola_kuis');
	}
?>