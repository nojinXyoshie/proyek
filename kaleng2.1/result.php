<?php

session_start();

include_once("function/koneksi.php");
include_once("function/helper.php"); 

$page = isset($_GET['page']) ? $_GET['page'] : false;

$Id_User = isset($_SESSION['Id_User']) ? $_SESSION['Id_User'] : false;
$User_Name = isset($_SESSION['User_Name']) ? $_SESSION['User_Name'] : false;


$jawab = $_SESSION['jawab'];
?>

<?php
 
    include 'koneksi kuis.php';

 
    
 
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Materi Pelajaran
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="mudah.php">Mudah (easy)</a>
                <a class="dropdown-item" href="sedang.php">Sedang (medium)</a>
                <a class="dropdown-item" href="sulit.php">Sulit (hard)</a>
                <a class="dropdown-item" href="index_kuis.php">Kuis</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Situs
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class='dropdown-item' href='apaitu.php'>Apa itu 'Belajar Bahasa Indramayu'</a>
                <a class="dropdown-item" href="pertanyaan.php">2 Column Portfolio</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php" style="margin-right: -50px">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<style>
#content {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#content td, #content th {
    border: 1px solid #ddd;
    padding: 8px;
}

#content tr:nth-child(even){background-color: #f2f2f2;}


#content th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
  
  <table border="1" id="content" align="center" style="margin-top: 250px;">
    <tr bgcolor="white">
        <td>
    <h1 class="hasil">Hasil Latihan</h1>
 
    <h2>SCORE ANDA: <?php echo $_SESSION['score']; ?></h2>
    <?php
      $score = $_SESSION['score']
    ?>
    <table border="1">
 
        <tr>
 
            <th>NO</th>
 
            <th>Jawaban Anda</th>
 
            <th>Kunci Jawaban</th>
 
            <th>Status</th>
 
        </tr>
 
        <?php
 
            $i = 0;
 
            $benar = $salah = 0;
 
            $sql = mysqli_query($koneksi,"select * from t_soal");
 
            while($key = mysqli_fetch_array($sql)){
 
        ?>
 
        <tr>
 
            <td><?php echo $i+1; ?></td>
 
            <td><?php echo $jawab[$i] ?></td>
 
            <td><?php echo $key['kunci']; ?></td>
 
            <td>
 
                <?php
 
                    if ($jawab[$i] == $key['kunci']) {
 
                        echo "Benar";
 
                        $benar++;
 
                    }else{
 
                        echo "Salah";
 
                        $salah++;
 
                    }
 
                 ?>
 
            </td>
 
        </tr>
 
        <?php
 
                $i++;
 
            }
 
         ?>
 
    </table>
 
    <h3>Benar: <?php echo $benar; ?><br>
 
    Salah: <?php echo $salah; ?></h3>

    <?php
    mysqli_query($koneksi, "UPDATE user set score = '$score' where User_Name = '$User_Name' ");
    ?>
    
    <a href="index_kuis.php">Kembali</a>
   </td>
   </tr>
   </table>

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