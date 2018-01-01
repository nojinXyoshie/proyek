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
                        <a class='dropdown-item' href='mudah.php'>Mudah (easy)</a>
                        <a class='dropdown-item' href='sedang.php'>Sedang (medium)</a>
                        <a class='dropdown-item' href='sulit.php'>Sulit (hard)</a>
                        <a class='dropdown-item' href='index_kuis.php?id_user=$_SESSION[Id_User]'>Kuis</a>
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


    <!-- Aksara Jawa -->
    <div class="jumbotron container">
      <div class="row">
        <div class="col-sm-12">
          <h1>Penjelasan Singkat Tentang Aksara Jawa</h1>
          <p>
            Aksara Jawa, merupakan salah satu peninggalan budaya yang tak ternilai harganya. Bentuk aksara dan seni pembuatannya pun menjadi suatu peninggalan yang patut untuk dilestarikan. Aksara jawa disebut juga dengan nama aksara Legenda. Aksara Legena merupakan aksara Jawa pokok yang jumlahnya 20 buah.<br><br>

Sebagai pendamping, setiap suku kata tersebut mempunyai pasangan, yakni katayang berfungsi untuk mengikuti suku kata mati atau tertutup, dengan suku kataberikutnya, kecuali suku kata yang tertutup oleh wignyan, cecak dan layar.Tulisan Jawa bersifat Silabik atau merupakan suku kata. Sebagai tambahan, didalam aksara Jawa juga dikenal huruf kapital yang dinamakan Aksara Murda.Penggunaannya untuk menulis nama gelar, nama diri, nama geografi, dan namalembaga.41Hanacaraka atau dikenal dengan nama carakan atau cacarakan adalahaksara turunan aksara Brahmi yang digunakan untuk naskah-naskah berbahasaJawa, bahasa Madura, bahasa Sunda, bahasa Bali, dan bahasa Sasak. Aksara Jawamodern adalah modifikasi dari aksara Kawi dan merupakan abugida. Hal ini bisadilihat dengan struktur masing-masing huruf yang paling tidak mewakili dua buahhuruf (aksara) dalam huruf latin.<br><br>

Sebagai contoh aksara Ha yang mewakili duahuruf yakni H dan A, dan merupakan satu suku kata yang utuh bila dibandingkandengan kata "hari". Aksara Na yang mewakili dua huruf, yakni N dan A, danmerupakan satu suku kata yang utuh bila dibandingkan dengan kata "nabi".Dengan demikian, terdapat penyingkatan cacah huruf dalam suatu penulisan kataapabila dibandingkan dengan penulisan aksara Latin.Pada bentuknya yang asli, aksara Jawa Hanacaraka ditulis menggantung (dibawah garis), seperti aksara Hindi. Namun demikian, pengajaran modern sekarang menuliskannya di atas garis.<br><br>

Aksara Jawa Hanacaraka memiliki 20 huruf dasar, 20huruf pasangan yang berfungsi menutup bunyi vokal, 8 huruf "utama" (aksara murda, ada yang tidak berpasangan), 8 pasangan huruf utama, lima aksara swara (huruf vokal depan), lima aksara rekan dan lima pasangannya, beberapa sandhangan sebagai pengatur vokal, beberapa huruf khusus, beberapa tanda baca, dan beberapa tanda pengatur tata penulisan (pada).
          </p>
        </div>
      </div>
    </div>
    <!-- Daftar Suku Kata Aksara Jawa -->
      <div class="jumbotron container" style="background: white;">
        <div class="row">
          <div class="col-md-12">
              <div class="media">
                <div class="media-left">
                  <img src="aksara/semar.jpg" class="media-object">
                  <div class="caption">
                    <p class="section-subheading text-muted" align="center">contoh gambar animasi aksara</p>
                  </div>
                </div>
                <div class="media-body">
                  <p style="margin-left: 20px;">Bahasa Indramayu punya jenis karakter, yaitu : Aksara. Aksara adalah simbol fonetik, 
                    masing-masing mewakili satu suku kata. Mempelajari suku-suku kata Indramayu adalah langkah pertama untuk membaca dan menulis.
                  </p>
                </div>
              </div>
              </div>
          </div>
          </div>
      <div class="jumbotron container">
        <div>
          <h2>Daftar Suku Kata Aksara Jawa</h2>
        </div>
        <br>
        <p>Arahkan kursor ke gambar untuk memastikan suara.</p>
        <nav>
        <div class="media">
           <div class="media" style="margin-left: -5px;">
             <img id="ha" src="aksara/ha.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="na" src="aksara/na.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ca" src="aksara/ca.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ra" src="aksara/ra.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ka" src="aksara/ka.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
        </div>
        <br>
        <div class="media">
           <div class="media">
             <img id="dha" src="aksara/dha.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ta" src="aksara/ta.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="sa" src="aksara/sa.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="wa" src="aksara/wa.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="la" src="aksara/la.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
        </div>
        <br>
        <div class="media">
           <div class="media">
             <img id="pa" src="aksara/pa.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="da" src="aksara/da.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ja" src="aksara/ja.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ya" src="aksara/ya.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="nya" src="aksara/nya.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
         </div>
         <br>
         <div class="media">
           <div class="media">
             <img id="ma" src="aksara/ma.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ga" src="aksara/ga.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="ba" src="aksara/ba.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="tha" src="aksara/tha.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
           <div class="media">
             <img id="nga" src="aksara/nga.png" class="img-thumbnail" alt="Cinque Terre">
           </div>
        </div>
        <audio id="soundBeepHa" loop="auto">
            <source src="audio/ha.mp3"></source>
        </audio>
        <audio id="soundBeepNa" loop="auto">
            <source src="audio/na.mp3"></source>
        </audio>
        <audio id="soundBeepCa" loop="auto">
            <source src="audio/ca.mp3"></source>
        </audio>
        <audio id="soundBeepRa" loop="auto">
            <source src="audio/ra.mp3"></source>
        </audio>
        <audio id="soundBeepKa" loop="auto">
            <source src="audio/ka.mp3"></source>
        </audio>
        <audio id="soundBeepDha" loop="auto">
            <source src="audio/dha.mp3"></source>
        </audio>
        <audio id="soundBeepTa" loop="auto">
            <source src="audio/ta.mp3"></source>
        </audio>
        <audio id="soundBeepSa" loop="auto">
            <source src="audio/sa.mp3"></source>
        </audio>
        <audio id="soundBeepWa" loop="auto">
            <source src="audio/wa.mp3"></source>
        </audio>
        <audio id="soundBeepLa" loop="auto">
            <source src="audio/la.mp3"></source>
        </audio>
        <audio id="soundBeepPa" loop="auto">
            <source src="audio/pa.mp3"></source>
        </audio>
        <audio id="soundBeepDa" loop="auto">
            <source src="audio/da.mp3"></source>
        </audio>
        <audio id="soundBeepJa" loop="auto">
            <source src="audio/ja.mp3"></source>
        </audio>
        <audio id="soundBeepYa" loop="auto">
            <source src="audio/ya.mp3"></source>
        </audio>
        <audio id="soundBeepNya" loop="auto">
            <source src="audio/nya.mp3"></source>
        </audio>
        <audio id="soundBeepMa" loop="auto">
            <source src="audio/ma.mp3"></source>
        </audio>
        <audio id="soundBeepGa" loop="auto">
            <source src="audio/ga.mp3"></source>
        </audio>
        <audio id="soundBeepBa" loop="auto">
            <source src="audio/ba.mp3"></source>
        </audio>
        <audio id="soundBeepTha" loop="auto">
            <source src="audio/tha.mp3"></source>
        </audio>
        <audio id="soundBeepNga" loop="auto">
            <source src="audio/nga.mp3"></source>
        </audio>
        </nav>
        <script>
          var soundBeepHa = $("#soundBeepHa")[0];
          $("nav #ha").hover(function() {
            soundBeepHa.play();
          }, function(){
            soundBeepHa.pause();
          });
          var soundBeepNa = $("#soundBeepNa")[0];
          $("nav #na").hover(function() {
            soundBeepNa.play();
          }, function(){
            soundBeepNa.pause();
          });
          var soundBeepCa = $("#soundBeepCa")[0];
          $("nav #ca").hover(function() {
            soundBeepCa.play();
          }, function(){
            soundBeepCa.pause();
          });
          var soundBeepRa = $("#soundBeepRa")[0];
          $("nav #ra").hover(function() {
            soundBeepRa.play();
          }, function(){
            soundBeepRa.pause();
          });
          var soundBeepKa = $("#soundBeepKa")[0];
          $("nav #ka").hover(function() {
            soundBeepKa.play();
          }, function(){
            soundBeepKa.pause();
          });
          var soundBeepDha = $("#soundBeepDha")[0];
          $("nav #dha").hover(function() {
            soundBeepDha.play();
          }, function(){
            soundBeepDha.pause();
          });
          var soundBeepTa = $("#soundBeepTa")[0];
          $("nav #ta").hover(function() {
            soundBeepTa.play();
          }, function(){
            soundBeepTa.pause();
          });
          var soundBeepSa = $("#soundBeepSa")[0];
          $("nav #sa").hover(function() {
            soundBeepSa.play();
          }, function(){
            soundBeepSa.pause();
          });
          var soundBeepWa = $("#soundBeepWa")[0];
          $("nav #wa").hover(function() {
            soundBeepWa.play();
          }, function(){
            soundBeepWa.pause();
          });
          var soundBeepLa = $("#soundBeepLa")[0];
          $("nav #la").hover(function() {
            soundBeepLa.play();
          }, function(){
            soundBeepLa.pause();
          });
          var soundBeepPa = $("#soundBeepPa")[0];
          $("nav #pa").hover(function() {
            soundBeepPa.play();
          }, function(){
            soundBeepPa.pause();
          });
          var soundBeepDa = $("#soundBeepDa")[0];
          $("nav #da").hover(function() {
            soundBeepDa.play();
          }, function(){
            soundBeepDa.pause();
          });
          var soundBeepJa = $("#soundBeepJa")[0];
          $("nav #ja").hover(function() {
            soundBeepJa.play();
          }, function(){
            soundBeepJa.pause();
          });
          var soundBeepYa = $("#soundBeepYa")[0];
          $("nav #ya").hover(function() {
            soundBeepYa.play();
          }, function(){
            soundBeepYa.pause();
          });
          var soundBeepNya = $("#soundBeepNya")[0];
          $("nav #nya").hover(function() {
            soundBeepNya.play();
          }, function(){
            soundBeepNya.pause();
          });
          var soundBeepMa = $("#soundBeepMa")[0];
          $("nav #ma").hover(function() {
            soundBeepMa.play();
          }, function(){
            soundBeepMa.pause();
          });
          var soundBeepGa = $("#soundBeepGa")[0];
          $("nav #ga").hover(function() {
            soundBeepGa.play();
          }, function(){
            soundBeepGa.pause();
          });
          var soundBeepBa = $("#soundBeepBa")[0];
          $("nav #ba").hover(function() {
            soundBeepBa.play();
          }, function(){
            soundBeepBa.pause();
          });
          var soundBeepTha = $("#soundBeepTha")[0];
          $("nav #tha").hover(function() {
            soundBeepTha.play();
          }, function(){
            soundBeepTha.pause();
          });
          var soundBeepNga = $("#soundBeepNga")[0];
          $("nav #nga").hover(function() {
            soundBeepNga.play();
          }, function(){
            soundBeepNga.pause();
          });
        </script>

      </div>   

    

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

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


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
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
                <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
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
                    <form id="register-form" style="display:none;">
                    <div class="modal-body">
                <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
                <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
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


    <!-- Bootstrap core JavaScript -->
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
