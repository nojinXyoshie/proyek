<?php

if($_GET['page']=="home"){
	include "user/home.php";
}
else if($_GET['page']=="aksara"){
	include "aksara.php";
}
else if($_GET['page']=="pelajaran"){
	include "user/pelajaran.php";
}
else if($_GET['page']=="mudah"){
	include "user/materi/mudah.php";
}
else if($_GET['page']=="sedang"){
	include "user/materi/sedang.php";
}
else if($_GET['page']=="sulit"){
	include "user/materi/sulit.php";
}
else if($_GET['page']=="index_kuis"){
	include "user/index_kuis.php";
}
else if($_GET['page']=="apaitu"){
	include "user/apaitu.php";
}
else if($_GET['page']=="pertanyaan"){
	include "user/pertanyaan.php";
}

?>