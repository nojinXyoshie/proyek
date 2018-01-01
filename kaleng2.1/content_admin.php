<?php
if($_GET['page']=="kelola_pel"){
	include "admin/kelola/kelola_pel.php";
}
else if($_GET['page']=="home"){
	include "admin/home.php";
}
else if($_GET['page']=="aksara"){
	include "admin/aksara.php";
}
else if($_GET['page']=="upload_materi_mudah"){
	include "admin/upload/upload_materi.php";
}
else if($_GET['page']=="kelola_lat_mudah"){
	include "admin/kelola/kelola_lat_mudah.php";
}
else if($_GET['page']=="edit_soal_mudah"){
	include "admin/edit/edit_soal_mudah.php";
}
else if($_GET['page']=="upload_materi_sedang"){
	include "admin/upload/upload_materi_sedang.php";
}
else if($_GET['page']=="kelola_lat_sedang"){
	include "admin/kelola/kelola_lat_sedang.php";
}
else if($_GET['page']=="edit_soal_sedang"){
	include "admin/edit/edit_soal_sedang.php";
}
else if($_GET['page']=="upload_materi_sulit"){
	include "admin/upload/upload_materi_sulit.php";
}
else if($_GET['page']=="kelola_lat_sulit"){
	include "admin/kelola/kelola_lat_sulit.php";
}
else if($_GET['page']=="edit_soal_sulit"){
	include "admin/edit/edit_soal_sulit.php";
}
else if($_GET['page']=="kelola_kuis"){
	include "admin/kelola/kelola_kuis.php";
}
else if($_GET['page']=="edit_kuis"){
	include "admin/edit/edit_kuis.php";
}
else if($_GET['page']=="data_admin"){
	include "admin/data/data_admin.php";
}
else if($_GET['page']=="edit_admin"){
	include "admin/edit/edit_admin.php";
}
else if($_GET['page']=="tambah_admin"){
	include "admin/tambah/tambah_admin.php";
}
else if($_GET['page']=="data_user"){
	include "admin/data/data_user.php";
}
else if($_GET['page']=="edit_user"){
	include "admin/edit/edit_user.php";
}
else if($_GET['page']=="tambah_user"){
	include "admin/tambah/tambah_user.php";
}
else if($_GET['page']=="inbox"){
	include "admin/inbox/inbox.php";
}
else if($_GET['page']=="balas_inbox"){
	include "admin/inbox/balas_inbox.php";
}
else if($_GET['page']=="upload_inbox"){
	include "admin/inbox/upload_inbox.php";
}
?>