<?php

	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE Email='$email' AND Password='$pwd'  ");
	$query2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE Email='$email' AND Password='$pwd'  ");

session_start();
if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){
	echo "<script>
          alert('Pastikan kode captcha cocok.');
            window.location='reg.php?page=login';
          </script>";
	}

else{
	if(mysqli_num_rows($query) == 0 && mysqli_num_rows($query2) == 1){
		//header("location: ".BASE_URL."login.php?page=login&notif=true&$dataform");
		session_start();

		$row2 = mysqli_fetch_assoc($query2);

		$_SESSION['Id_Admin'] = $row2['Id_Admin'];
		$_SESSION['User_name'] = $row2['User_name'];

		header("location: ".BASE_URL."index.php?page=home");

	}

	else if(mysqli_num_rows($query) == 1 && mysqli_num_rows($query2) == 0){
		$row = mysqli_fetch_assoc($query);

		session_start();

		$_SESSION['Id_User'] = $row['Id_User'];
		$_SESSION['User_Name'] = $row['User_Name'];

		header("location: ".BASE_URL."index.php?page=home");
	}

	else if(mysqli_num_rows($query) == 0 && mysqli_num_rows($query2) == 0){
		header("location: ".BASE_URL."reg.php?page=login&notif=true&$dataform");
	}
}

	//else if(mysqli_num_rows($query2) == 0){
	//	header("location: ".BASE_URL."login.php?page=login&notif=true&$dataform");
	//}
	/*else if(mysqli_num_rows($query2) == 1){
		$row = mysqli_fetch_assoc($query2);

		session_start();

		$_SESSION['Id_Admin'] = $row['Id_Admin'];
		$_SESSION['User_name'] = $row['User_name'];

		header("location: ".BASE_URL."index.php?page=my_profile");
	}*/