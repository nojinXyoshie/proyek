<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php"); 

	if(isset($_GET['no'])){
		$delete2 = mysqli_query($koneksi, "DELETE FROM list_pertanyaan WHERE no = '".$_GET['no']." '");
		$delete = mysqli_query($koneksi, "DELETE FROM kontak WHERE no = '".$_GET['no']." '");
		header('location:index.php?page=inbox');
	}
?>