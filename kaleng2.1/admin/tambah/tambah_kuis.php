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
          
          if($Id_Admin){
            echo "<li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Pelajaran
                      </a>
                      <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                        <a class='dropdown-item' href='kelola_pel.php'>Kelola Pelajaran</a>
                      </div>
                    </li>";
            }
            else {
            echo "<li class='nav-item'>
                    <a class='nav-link js-scroll-trigger' href='pelajaran.php'>Pelajaran</a>
                  </li>";
            }
          ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="aksara.php">Aksara Jawa</a>
            </li>
            <?php
            if($Id_User){
               echo "<script>
                        alert('Maaf, Anda harus login sebagai admin.');
                        window.location='index.php?page';
                      </script>";
            }
            else if($Id_Admin){
            echo "<li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Materi Pembelajaran
                    </a>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'>
                      <a class='dropdown-item' href='upload_materi.php'>Upload Materi Mudah (easy)</a>
                      <a class='dropdown-item' href='#'>Upload Materi Sedang (medium)</a>
                      <a class='dropdown-item' href='#'>Upload Materi Sulit (hard)</a>
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
                echo "<script>
                        alert('Maaf, Anda harus login sebagai admin.');
                        window.location='reg.php?page';
                      </script>";
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
    <!--end navigation-->

    <!--content-->
  <div style="height: 1000px;">
    <form action="" method="POST">
      <table width="50%" style="margin-top: 200px;" align="center">    
        <tr>
          <td><label class="control-label"><b>No</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="no" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Soal</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="soal" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Jawaban a</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="a"  required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Jawaban b</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="b" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Jawaban c</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="c" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Jawaban d</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="d" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Kunci Jawaban</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="kunci" required></div></td>
        </tr>
        <tr>
          <td> 
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="simpan" value="Simpan">
          </div>
          </td>
        </tr>                
      </table>
    </form>
  </div>  
    <?php


    if(isset($_POST['simpan'])){
      $insert = mysqli_query($koneksi, "INSERT INTO t_soal VALUES
        ('".$_POST['no']."',
          '".$_POST['soal']."',
          '".$_POST['a']."',
          '".$_POST['b']."',
          '".$_POST['c']."',
          '".$_POST['d']."',
          '".$_POST['kunci']."')");

        if($insert){
          echo "<script>
                  alert('berhasil disimpan');
                </script>";
        }
        else{
          echo "<script>
                  alert('Maaf, nomor yang anda masukkan mungkin sudah digunakan.');
                </script>".mysqli_error($koneksi);
        }
    }

    ?>

    <!--end content-->

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