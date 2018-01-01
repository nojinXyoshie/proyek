<?php

include_once("function/koneksi.php");
include_once("function/helper.php");


$namalengkap = $_POST['namalengkap'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$asald = $_POST['asald'];
$sekolah = $_POST['sekolah'];
$pendidikan = $_POST['pendidikan'];



unset($_POST['pwd']);
unset($_POST['pwd2']);
$dataform = http_build_query($_POST);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE Email='$email'"); //ini untuk menyeleksi email yang sudah terdaftar.

if(empty($namalengkap) || empty($email) || empty($asald) || empty($sekolah) || empty($pwd)){
	header("location: ".BASE_URL."reg.php?page=register&notif=require&$dataform");
}
else if ($pwd != $pwd2) {
	header("location: ".BASE_URL."reg.php?page=register&notif=password&$dataform");
}
else if (mysqli_num_rows($query) == 1) {
	header("location: ".BASE_URL."reg.php?page=register&notif=email&$dataform");
}
else{
mysqli_query($koneksi, "INSERT INTO user(User_name, Password, umur, Email, Asal_Daerah, Asal_Sekolah, Pendidikan) VALUES ('$namalengkap','$pwd','$umur','$email','$asald','$sekolah','$pendidikan')");
	header("location: ".BASE_URL."reg.php?page=register&notif=success");
}