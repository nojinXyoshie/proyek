<?php

session_start();

unset($_SESSION['Id_User']);
unset($_SESSION['User_Name']);
unset($_SESSION['Id_Admin']);
unset($_SESSION['User_name']);
header("location: index.php");

?>