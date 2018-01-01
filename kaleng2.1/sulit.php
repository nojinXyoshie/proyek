<?php

session_start();

include_once("function/koneksi.php");
include_once("function/helper.php"); 

$page = isset($_GET['page']) ? $_GET['page'] : false;

$Id_User = isset($_SESSION['Id_User']) ? $_SESSION['Id_User'] : false;
$User_Name = isset($_SESSION['User_Name']) ? $_SESSION['User_Name'] : false;

$Id_Admin = isset($_SESSION['Id_Admin']) ? $_SESSION['Id_Admin'] : false;
$User_Name2 = isset($_SESSION['User_name']) ? $_SESSION['User_name'] : false;

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kaleng | Krama Language - Learning</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">


    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinyMCE.init({
        selector: "textarea",
      });
    </script>

  </head>

  <body id="page-top">

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php?page=home" style="border-right-style: solid; padding-right: 10px">Home</a>
        <?php
          if($Id_Admin){
            echo "<div class='navbar-brand js-scroll-trigger'><b>Hello! Admin, $User_Name2</b></div>";
          }
          else if($Id_User){
            echo "<div class='navbar-brand js-scroll-trigger'><b>Hello! $User_Name</b></div>";
          }
        ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
          <?php
          
          if($Id_Admin){
            echo "<li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Pelajaran
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='index.php?page=kelola_pel'>Kelola Pelajaran</a>
                      </div>
                    </li>";
            }
          else if($Id_User){
            echo "<li class='nav-item'>
                    <a class='nav-link js-scroll-trigger' href='index.php?page=pelajaran'>Pelajaran</a>
                  </li>";
            }
          else{
            echo "<li class='nav-item'>
                    <a class='nav-link js-scroll-trigger' href='pelajaran.php'>Pelajaran</a>
                  </li>";
          }  

          ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="aksara.php?page=aksara">Aksara Jawa</a>
            </li>

            <?php
            if($Id_User){
               echo "<li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Materi Pembelajaran
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='index.php?page=mudah'>Mudah (easy)</a>
                        <a class='dropdown-item' href='index.php?page=sedang'>Sedang (medium)</a>
                        <a class='dropdown-item' href='index.php?page=sulit'>Sulit (hard)</a>
                        <a class='dropdown-item' href='index.php?page=index_kuis&id_user=$_SESSION[Id_User]'>Kuis</a>
                      </div>
                    </li>
                    <li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Situs
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='index.php?page=apaitu'>Apa itu 'Belajar Bahasa Indramayu'</a>
                        <a class='dropdown-item' href='index.php?page=pertanyaan'>Daftar Pertanyaan Populer</a>
                      </div>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link js-scroll-trigger' href='contact.php' style='margin-right: -50px'>Contact</a>
                    </li>
                    ";
            }
            else if($Id_Admin){
            echo "<li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Materi Pembelajaran
                    </a>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                      <a class='dropdown-item' href='index.php?page=upload_materi_mudah'>Upload Materi Mudah (easy)</a>
                      <a class='dropdown-item' href='index.php?page=upload_materi_sedang'>Upload Materi Sedang (medium)</a>
                      <a class='dropdown-item' href='index.php?page=upload_materi_sulit'>Upload Materi Sulit (hard)</a>
                      <a class='dropdown-item' href='index.php?page=kelola_kuis'>Kelola Kuis</a>
                    </div>
                  </li>
                    <li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Admin
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='index.php?page=data_admin'>Data Admin</a>
                        <a class='dropdown-item' href='index.php?page=tambah_admin'>Tambah Admin</a>
                        <a class='dropdown-item' href='index.php?page=data_user'>Data User</a>
                        <a class='dropdown-item' href='index.php?page=tambah_user'>Tambah User</a>
                      </div>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link js-scroll-trigger' href='index.php?page=inbox'>Inbox</a>
                  </li>
                  ";
            }
            else{
                echo "<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          Materi Pembelajaran
                        </a>
                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                          <a class='dropdown-item' href='mudah.php'>Mudah (easy)</a>
                          <a class='dropdown-item' href='sedang.php'>Sedang (medium)</a>
                          <a class='dropdown-item' href='sulit.php'>Sulit (hard)</a>
                          <a class='dropdown-item' href='kuisfail.php' name=''>Kuis</a>
                        </div>
                      </li>
                      <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          Situs
                        </a>
                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                          <a class='dropdown-item' href='index.php?page=apaitu'>Apa itu 'Belajar Bahasa Indramayu'</a>
                          <a class='dropdown-item' href='pertanyaan.php'>Daftar Pertanyaan Populer</a>
                        </div>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link js-scroll-trigger' href='contact.php'>Contact</a>
                      </li>
                      ";
            }
            ?>
            
            <?php   
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

            if($notif=="login"){
              echo "<script>
                  alert('Maaf, Anda harus login terlebih dahulu.');
                  window.location='?page=login';
              </script>";
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
  <?php
    if($Id_User){
    echo "
      <div style='margin-top: 150px;'>
        <div class='jumbotron' style='height: 400px; background-color:lightblue; background-image: url(img/Taman1.jpg); background-repeat: no-repeat;'>
        <img src='img/Logo.png' height='200' width='200' style='float: right;' >
          <h1>Mari Belajar Bahasa Indramayu</h1>
          <p>Teknik Informatika || Politeknik Negeri Indramayu</p>
          <a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='logout.php' >Logout</a>
        </div>
      </div>";
    }
    else if($Id_Admin){
    echo"<div style='margin-top: 150px;'>
        <div class='jumbotron' style='height: 400px; background-color:lightblue; background-image: url(img/Taman1.jpg); background-repeat: no-repeat;'>
        <img src='img/Logo.png' height='200' width='200' style='float: right;' >
          <h1>Mari Belajar Bahasa Indramayu</h1>
          <p>Teknik Informatika || Politeknik Negeri Indramayu</p>
          <a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='logout.php' >Logout</a>
        </div>
      </div>";
    }
    else{
      echo "
      <div style='margin-top: 150px;'>
        <div class='jumbotron' style='height: 400px; background-color:lightblue; background-image: url(img/Taman1.jpg); background-repeat: no-repeat;'>
        <img src='img/Logo.png' height='200' width='200' style='float: right;' >
          <h1>Mari Belajar Bahasa Indramayu</h1>
          <p>Teknik Informatika || Politeknik Negeri Indramayu</p>
          <a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='reg.php' >Register & Login</a>
        </div>
      </div>";
    }
 ?>
  <!-- header -->

<style>
#konten, .thumbnail{
    border: 1px solid #ddd;
    padding: 8px;
    border-radius: 10px;
    background: white;
}

.thumbnail:hover {background-color: #ddd;}

}
</style>
    <!-- Materi Mudah -->
    
    <div class="jumbotron" style="background-color: #4CAF50">

         <div class="row">
        <?php
          $select=mysqli_query($koneksi, "SELECT * FROM materi_sulit");
          while($isi = mysqli_fetch_array($select)){
        ?>         
          <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
              <img src="img/sulit/materi<?php echo $isi['Id_materi'] ?>.jpg" width="100%" height="100%">
                <div class="caption">
                  <h3><?php echo $isi['judul_materi'] ?></h3>
                  <p><a href="materi1<?php echo $isi['Id_materi'] ?>.php" class="btn btn-primary" role="button">Lihat</a> </p>
                </div>
            </div>
          </div>
        <?php } ?> 
        <br><br>
      </div>
    </div>


<!-- Latihan Soal -->

    <?php
    if($Id_User){
      $select=mysqli_query($koneksi, "SELECT * FROM user where Id_User = '".$_SESSION['Id_User']."' order by Id_User asc");
      $isi = mysqli_fetch_array($select);
      if($isi['score_lat_sedang']>=75){
    ?>
    <div align="center">
      <div class="jumbotron" style="width: 50%; margin-top: 50px;" align="center">
        <h1 class="display-3">Hello, <?php echo "$User_Name"; ?></h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <?php
          if($isi['score_lat_sulit']>=1){
        ?>
        <p><h6 class="display-5">Score terahir Anda mengerjakan Latihan soal : <?php echo $isi['score_lat_sulit'] ?></p>
        <?php
          }
          else{
            echo "<p><h6 class='display-5'>Anda belum pernah mengerjakan Latihan soal, silahkan klik tombol dibawah untuk memulai.</p>";
          }
        ?>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="index_lat_sulit.php" role="button">Mulai</a>
        </p>
      </div>
    </div>
    <?php
      }
    else if($isi['score_lat_sulit']<75){
      echo "<div class='alert alert-info'>
            <strong>Info!</strong> Ayo kerjakan latihan soal di tingkat sedang dan raihlah score minimal 75 untuk dapat membuka latihan soal pada tingkat sulit.
          </div>";
    }
  }
    else {
    echo "<div class='alert alert-info'>
            <strong>Info!</strong> Silahkan Daftarkan akun anda dan login untuk dapat mengerjakan latihan soal.
          </div>";
    }
    ?> 
<!-- Latihan Soal -->


     <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
              Materi Yang Disarankan :
                <div class="row">
                  <div class="col-sm-4">
                    <div class="col-sm-4">
                    <a href="#" class="btn btn-primary" role="button">Materi Mudah</a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-sm-4">
                    <a href="#" class="btn btn-primary" role="button">Materi Sedang</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 text-center"><br><br>
              <div class="col-sm-12">
                <ul class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Memilih Materi
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="">Materi 1</a>
                <a class="dropdown-item" href="">Materi 2</a>
                <a class="dropdown-item" href="">Materi 3</a>
                <a class="dropdown-item" href="">Materi 4</a>
                <a class="dropdown-item" href="">Materi 5</a>
              </div>
            </ul>
              </div>
            </div>
          </div>
        </div><br><br>

     <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/yoshie.jpg" alt="">
              <h4>Yoshie Pangestu</h4>
              <p class="text-muted">Programmer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="http://www.facebook.com/yoshie.pangestu">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="http://www.instagram.com">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Arie Fahmi Luthfi</h4>
              <p class="text-muted">Project Manager</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="http://www.facebook.com">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="http://www.instagram.com">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/lulu.jpg" alt="">
              <h4>Lulu Mukhoyyaroh</h4>
              <p class="text-muted">Database</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="http://www.facebook.com">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="http://www.instagram.com">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Widiana Silvi</h4>
              <p class="text-muted">Analyst</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="http://www.facebook.com">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="http://www.instagram.com">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Follow Kami :-)</p>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Footer -->
    <footer style="background: orange;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Kaleng 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </footer>

   


    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
                    <div class="modal-body">
                <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Tulis Email dan password anda.</span>
                            </div>
                <input id="login_username" class="form-control" type="text" placeholder="Username" required>
                <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                  <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                  <div class="modal-body">
                <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
                <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;" action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
                    <?php
          $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
          $namalengkap = isset($_GET['namalengkap']) ? $_GET['namalengkap'] : false;
          $asald = isset($_GET['asald']) ? $_GET['asald'] : false;
          $sekolah = isset($_GET['sekolah']) ? $_GET['sekolah'] : false;
          $umur = isset($_GET['umur']) ? $_GET['umur'] : false;
          $pendidikan = isset($_GET['pendidikan']) ? $_GET['pendidikan'] : false;
          $email = isset($_GET['email']) ? $_GET['email'] : false;

          if($notif=="require"){
            echo "<script>
                alert('Maaf, anda harus melengkapi form');
                window.location='?page=login';
            </script>";
          }
          else if($notif == "password"){
            echo "<script>
                alert('Maaf, password yang anda masukkan tidak cocok');
                window.location='?page=login';
            </script>";
          }
          else if($notif == "email"){
            echo "<script>
                alert('Maaf, email yang anda masukkan sudah terdaftar');
                window.location='?page=login';
            </script>";
          }
          else if($notif == "success"){
            echo "<script>
                alert('Register Sukses!!!');
                window.location='?page=login';
            </script>";
          }
          ?>
                      <div class="modal-body">
                        <div id="div-register-msg">
                            <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register akun.</span>
                        </div>
                            <input id="register_username" class="form-control" type="text" placeholder="Nama Lengkap" name="namalengkap" value="<?php echo $namalengkap; ?>" required/>
                            <input id="register_asald" class="form-control" type="text" placeholder="Asal Daerah" name="asald" value="<?php echo $asald; ?>"/>
                            <input id="register_asals" class="form-control" type="text" placeholder="Asal Sekolah" name="sekolah" value="<?php echo $sekolah; ?>" required />
                            <select id="register_Pendidikan" class="form-control" placeholder="Pendidikan" name="pendidikan" id="pendidikan" value="<?php echo $pendidikan; ?>" style="margin-top: 10px;"/>
                              <option>SMP</option>
                              <option>SMA/SMK</option>
                              <option>Lainnya</option>
                            </select>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" name="email" value="<?php echo $email; ?>" required/>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" name="pwd" required>
                            <input id="register_password2" class="form-control" type="password" placeholder="Konfirmasi Password" name="pwd2" required>
                      </div>
                      <div class="modal-footer">
                          <div>
                              <button type="submit" class="btn btn-primary btn-lg btn-block" value="register">Register</button>
                          </div>
                          <div>
                              <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                              <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                          </div>
                      </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
      </div>
    </div>
  </div>
    <!-- END # MODAL LOGIN -->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="js/login.js"></script>

  </body>

</html>