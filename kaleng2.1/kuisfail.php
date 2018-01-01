<?php

	include_once("function/koneksi.php");
	include_once("function/helper.php");

	header("location: ".BASE_URL."reg.php?notif=login&$dataform");