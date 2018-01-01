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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php" style="border-right-style: solid; padding-right: 10px">Home</a>
        <?php
          if($Id_User){
            echo "<div class='navbar-brand js-scroll-trigger'><b>Hello! $User_Name</b></div>";
          }
        ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
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
          <a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='Reg.php' >Register & Login</a>
        </div>
      </div>";
    }
 ?>
  <!-- header -->

    <!--apa itu belajar bahasa indramayu-->
    <table border="1" id="content" align="center" style="height: auto;">
    <table width="80%" border="0" align="center" style="margin-bottom: 20px;">
      <tr bgcolor="white">
        <td colspan="2">
          <h1  style="margin-left: 30px;">Apa itu "Belajar Bahasa Indramayu"</h1>
        </td>
      </tr>
      <tr bgcolor="white">
        <td style="border-bottom-left-radius: 10px; padding-bottom: 20px;">
          <img src="image/Karakter/8.jpg" height="200" width="200" style="margin-left: 30px">
        </td>
        <td style="border-bottom-right-radius: 10px;">
          <p style="margin-left: 30px; margin-right: 30px;">"Krama Language & Learning" adalah program belajar bahasa Indramayu yang diproduksi oleh Mahasiswa Polindra. Anda dapat mempelajari tata bahasa dasar dan beragam ungkapan yang berguna melalu pelajaran-pelajaran yang dirancang dalam bentuk audio. Anda dapat belajar bersama kami secara gratis.</p>
        </td>
      </tr>
    </table>
    <table width="80%" border="0" align="center" style="margin-bottom: 20px; border-radius: 10px;">
      <tr bgcolor="white" style="border-radius: 10px;">
        <td style="border-radius: 10px;">
          <h1 style="margin-left: 30px">Pengantar Cerita.</h1>
          <p style="margin-left: 30px">Tokoh utama dalam adegan ini adalah Tomy, seorang mahasiswa berusia 20 tahun yang sangat menyukai Indramayu. Ia datang ke Indramayu untuk belajar bahasa Indramayu selama satu tahun. Ia akan mempelajari bahasa Indramayu praktis melalui berbagai cara, seperti misalnya di universitas, kehidupan sehari-hari di asrama, berbelanja dan bepergian.</p>
        </td>
      </tr>
    </table>
    <table width="80%" border="0" align="center" style="height: 60px;">
      <tr bgcolor="white" style="border-radius: 10px;">
        <td height="60" style="border-top-right-radius: 10px; border-top-left-radius: 10px">
          <h1 style="margin-left: 30px"><b>Tokoh<b></h1>
        </td>
      </tr>
    </table>
    <table width="80%" border="0" align="center" style="height: 100px;">  
      <tr bgcolor="white">
        <td width="20%" height="400" bgcolor="white" style="margin-right: 20px;">
          <img width="100%" height="400" src="image/Karakter/15.jpg" style="margin-left: 20px; ">
        </td>
        <td width="80%" bgcolor="white">
          <p style="margin-left: 30px; width: 70%"><b>Tomy</b>
          <br>
            Seorang mahasiswa. Kepribadiannya ceria dan ia punya keingintahuan yang besar. Meskipun sering membuat kesalahan, ia terus belajar bahasa dan adat-istiadat Indramayu serta tumbuh menjadi seseorang.
          </p>
        </td>
      </tr>
    </table>
    <table width="80%" border="0" align="center" style="height: 100px;">
      <tr>
        <td width="80%" bgcolor="white">
          <p style="margin-left: 200px; width: 70%" ><b>Mina</b>
          <br>
            Mina adalah seorang mahasiswi di universitas tempat Tomy belajar. Ia belajar untuk menjadi guru bahasa Indramayu. Ia bertindak sebagai "pendamping" yang membantu para mahasiswa luar daerah dan membantu Tomy supaya terbiasa dengan kehidupan di Indramayu.
          </p>
        </td>
        <td width="20%" height="400" bgcolor="white" style="margin-right: 20px;">
          <img width="100%" height="400" src="image/Karakter/16.jpg" style="margin-right: 20px; ">
        </td>
      </tr>
    </table>
  </table>

    

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
