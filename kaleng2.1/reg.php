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

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

        <link href="css/modern-business.css" rel="stylesheet">


      <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php" style="border-right-style: solid; padding-right: 10px">Home</a>
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
          if($Id_User){
            echo "<li class='nav-item'>
                    <a class='nav-link js-scroll-trigger' href='profile.php'>Profile</a>
                  </li>";
            }
          ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pelajaran.php">Pelajaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="aksara.php">Aksara Jawa</a>
            </li>
            <?php
            if($Id_User){
               echo "<li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Materi Pembelajaran
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='mudah.php'>Mudah (easy)</a>
                        <a class='dropdown-item' href='sedang.php'>Sedang (medium)</a>
                        <a class='dropdown-item' href='sulit.php'>Sulit (hard)</a>
                        <a class='dropdown-item' href='index_kuis.php'>Kuis</a>
                      </div>
                    </li>
                    <li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Situs
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='apaitu.php'>Apa itu 'Belajar Bahasa Indramayu'</a>
                        <a class='dropdown-item' href='pertanyaan.php'>Daftar Pertanyaan Populer</a>
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
                      <a class='dropdown-item' href='upload_materi.php'>Upload Materi Mudah (easy)</a>
                      <a class='dropdown-item' href='upload_materi_sedang.php'>Upload Materi Sedang (medium)</a>
                      <a class='dropdown-item' href='upload_materi_sulit.php'>Upload Materi Sulit (hard)</a>
                      <a class='dropdown-item' href='kelola_kuis.php'>Kelola Kuis</a>
                    </div>
                  </li>
                    <li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Admin
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='data_admin.php'>Data Admin</a>
                        <a class='dropdown-item' href='tambah_admin.php'>Tambah Admin</a>
                        <a class='dropdown-item' href='data_user.php'>Data User</a>
                        <a class='dropdown-item' href='tambah_user.php'>Tambah User</a>
                      </div>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link js-scroll-trigger' href='#'>Inbox</a>
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
                          <a class='dropdown-item' href='apaitu.php'>Apa itu 'Belajar Bahasa Indramayu'</a>
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
    

    

    

    <!-- Begin | Register Form -->
    <div style="margin-top: 100px">
    <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Register</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Ayo Daftarkan Akun Anda!</h1>
          
          <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="post">
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

          
          <div class="field-wrap">
            <label>
              Nama Lengkap<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="namalengkap" value="<?php echo $namalengkap; ?>"/>
          </div>

          <div class="field-wrap">
            <label>
              Alamat<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="asald" value="<?php echo $asald; ?>"/>
          </div>          

          <div class="field-wrap">
            <label>
              Asal Sekolah<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="sekolah" value="<?php echo $sekolah; ?>"/>
          </div>

          <div class="field-wrap">
            <label>
              Pendidikan<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="pendidikan" value="<?php echo $pendidikan; ?>"/>
          </div>  

          <div class="field-wrap">
            <label>
              Umur<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="umur" value="<?php echo $umur; ?>"/>
          </div>          

          <div class="field-wrap">
            <label>
              Alamat Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" value="<?php echo $email; ?>"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Atur Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pwd" />
          </div>

          <div class="field-wrap">
            <label>
              Konfirmasi Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pwd2"/>
          </div>
          
          <button type="submit" class="button button-block" href="#"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Selamat Datang!</h1>
          
          <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="post">
            <?php

              $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

              if($notif == true){
                
                echo "<script>
                    alert('Maaf, email atau password yang anda masukkan salah');
                    window.location='?page=register';
                </script>";

              }
            ?>  
          
          <div class="field-wrap">
            <label>
              Alamat Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pwd"/>
          </div>

          <div class="field-wrap" align="center">
            <img src="gambar.php" alt="gambar"/>
          </div>

          <div class="field-wrap">
            <label>
              Isikan Captcha<span class="req">*</span>
            </label>
            <input name="nilaiCaptcha" value="" maxlength="6" autocomplete="off" required />
          </div>
          
          <input type="submit" class="button button-block" value="login" />
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      </div> <!-- /form -->
      </div>
                    <!-- End | Register Form -->
    
    <!-- Footer -->
    <footer style="background: orange">
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
                
                
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template-->
    <script src="js/agency.min.js"></script>
    <script src="js/login.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!--script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script-->


      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>





  </body>

</html>
