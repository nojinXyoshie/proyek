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
        <a class="navbar-brand js-scroll-trigger" href="index.php">Home</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Home
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Aksara Jawa</a>
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
              <a class="nav-link js-scroll-trigger" href="#portfolio">Aksara Jawa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Materi Pelajaran
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="mudah.php">Mudah (easy)</a>
                <a class="dropdown-item" href="sedang.php">Sedang (medium)</a>
                <a class="dropdown-item" href="sulit.php">Sulit (hard)</a>
                <a class="dropdown-item" href="kuis.php">Kuis</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Situs
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
            </li>
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

  <!--content-->
     <div class="jumbotron" align="center" style="width: 100%; ">
        <div class="row" style="width: 90%; ">
                 <?php
                    $select=mysqli_query($koneksi, "SELECT * FROM materi where id_materi='1'");
                    $isi = mysqli_fetch_array($select);
                  ?>
              
                <img src="#">
                <!--p><a href="#" class="btn btn-primary" role="button"><?php /*echo $isi['judul_materi'] */?></a></p-->
                <table width="100%" align="center">
                  <tr>
                    <td>
        <div class="row" style="width: 100%; ">
        
                <img src="#">
                <table width="100%" align="center">
                  <tr>
                    <td>
                    <div class="jumbotron" style="background: #212529;">
                          <h1 class="display-3" style="margin-left: 90px; color: #FFD700;">Babad Dermayu</h1>
                          <br>
                          <img src="img/wiralodra.jpg" style="margin-left: 250px; margin-bottom: 30px" >
                            <p style="margin-left: 90px; color: #FFD700;">
                             Raden Wiralodra iku anak Bupati Bagelan, Raden Singalodra. Lagi nonomane Raden Singalodra seneng luruh elmu lan seneng tapa brata. Saben lelungan ditiburi pawongane, arane Ki Tinggil. Waktu lagi tapa, Raden Singalodra olih wangsit, ana suwara tanpa rupa: “Putuku, Raden Wiralodra, Lamon sira kepengen olih kamulyan pitung turunan, sira kudu babad tanah alas ning lalahan wetan kali cimanuk. Gage-gage sira mangkata!”<br>
  Sawise olih wangsit, Raden Wiralodra kebat ninggalaken pertapaan. Diiringaken pawongane, Raden Wiralodra ngadhep ning ibu ramane ning pendhopo. Kabeneran sadulur-sadulure lagi padha kumpul kabeh ning pendhopo. Raden Wiralodra matur yen dheweke iku nembe olih wangsit. Brabal wangsite diceritakaken ning arepan ibu ramane lan sadulur-sadulure.
  Raden Wiralodra njaluk idin arep nyunponi wangsit mau. Ibu ramane mboten maringi idin. Lan sedulur-sedulure ngaboti, tapi Raden Wiralodra maksa arep mangkat. Raden Wiralodra akhire mangkat diiringaken pawongane, Ki Tinggil, Lakune deder ngajeg ngulon.<br>
  Sawijine dina, Raden Wiralodra ketemu karo kali gedhe.<br>
“Ki Tinggil, apa kiyen sing diarani kali Cimanuk?” takon Raden Wiralodra ning Ki Tinggil.<br>
“Boten uning, Den,” Ki Tinggil Mangsuli<br>
Lagi Raden  Wiralodra kebingungan, ujug-ujug ana kaki-kaki lagi dhodhok ning pinggir kebonan. Terus diTakoni.<br>
“Ki, apa kiyen sing diarani kali Cimanuk?”<br>
“Iku dudu kali Cimanuk. Iku kali Citarum. Kali Cimanuk uwis kaliwat adoh.”Sawise semaur, kaki-kai mau ngilang tanpa krana.<br>
  Raden Wiralodra balik maning meng ngetan. Tekang bulaklak, Raden Wiralodra ketemu karo kaki-kaki lagi gaga semangka. Kaki-kaki mau ditakoni kenang Raden Wiralodra. Kaki-Kaki boro-boro semaur, malah ngumbangi entek bersih ning Raden Wiralodra lan Ki Tinggil. Raden Wiralodra ilang sabare, kaki-kaki dichandak. Barang arep dibantingakaken, kaki-kaki mau murca, ilang tanpa krana.<br>
  Entas Ilange kaki-kaki, ana suwara tanpa rupa: “ Kiyen kih Kali Cipunegara. Mengko baka sira ketemu karo kidang kencana, iku tandhae sira wis tekang kali cimanuk.”<br>
  Raden Wiralodra nerusaken lelakone. Lakune ngetan ngalor, Ning tengahe alas, dheweke ketemu karo wong wadon ayu. Arane ngaku Larwaba. Larwana njaluk dikawin. Raden Wiralodra nolak. Akhire timbul perang tandhing. Larawana  kecandhak kenang Raden Wiralodra. Barang arep dibantingaken, Larawana ngilanga dadi kidang kencana.Playune kidang kencana nabrag kali gedhe. Tekang sabrang wetan kali, kidang kencana ilang. Terus ana suwara tanpa rupa:” He , nang Wiralodra, kali kang sebrang iku kali cimanuk.”<br>
Ning Kono, Raden Wiralodra lan Ki Tinggil babad alas. Sajerone babad alas, serng diganggu makhluk alus. Sawise pragad, lalahan mau digawe padhukuhan. Sarehning padhukuan uwis dadi, Raden Wiarlodra arep sowan ning ibu ramane ning Bagelan. Sing dikongkon ngupakara padhukuan yaiku Ki Tinggil.<br>
Sapeninggal Raden Wiralodra, ana wong  wadon ayu teka. Dheweke arep melu manggon ning kono. Wong wadon mau arane Endhang Darma. Ki Tinggil nolak, sebab diwelingi aja gerek nrima pendhuduk anyar. Mulane Nyi Endhang Darma dipernahken ning kulon kali cimanuk.
Ujare wong kandha, pendhukuan Cimanuk katekan Pangeran Guru sing tanah sabrang. Pangeran Guru diiringaken pandhakawane sing akehe pad likur. Maksude  arep nglamar nyi Endhang Darma. Nanging, Nyi Endhang Darma nolak lamarane Pangeran Guru bari sesumbar: “Sapa bae kena ngawini Nyi Endhang Darma, asal wong mau bisa ngalahaken jurite Nyi Endhang Darma.”
Pangeran Guru ngerasa ditantang. Ning kono, kedadian perang tandhinge  antara Pangeran Guru karo Nyi Endhang Darma. Wusnane Pangeran Guru sabala kancane perlaya kabeh.<br>
Ki Tinggil weruh nemoni Nyi Endhang darma dheweke enggal nglaporaken ning Raden Wiralodra ning Bagelan. Raden Wiralodra enggal pamit ning ramane. Balike Raden Wiralodra ditaburi adhine Raden Tanujaya lan Raden Tanujiwa serta pamane, Raden Wiragora.
Raden Wiralodra nemoni Nyi Endhang Darma keiring dukaning manah. Tapi ndeleng pasuryane Nyi Endhang Darma. Ilang napsune, malah Raden Wiralodra kesengsem. Nyi Endhang Darma dikandhani supaya dadi garwane. Tapi Nyi Endhang Darma beli gelem.
Akhire Raden Wiralodra ngerti yen Nyi Endhan Darma ngemban pancen lir pindha telik sandhi. Sanalika Raden Wiralodra mrentah Raden Tanujaya lan Raden Tanujiwa supaya ngimpred Nyi Endhang Darma.<br>
Raden Tanujaya lan Raden Tanujiwa beli kuat ngadhepi Nyi Endhang Darma. Rikat Raden Wiragora mbantu. Raden Wiragora uga beli kuat lan murca ning alam semar. Raden Wiralodra cangcut tali wanda ngayoni jurite Endhang Darma.
Akhire Nyi Endhang Darma ngedhapruk ning arsane Raden Wiralodra karo ngucap, “Aduh Gusti, kula ampun, pasrah pasti nyuwun gesang.” Nyi Endhang Darma gage diangkat lan diampuni kenang Raden Wiralodra.<br>
Nyi Endhang Darma inget ning tugase. Mulane Nyi Endhang Darma gage diangkat lan diampuni kenang Raden Wiralodra.
Nyi Endhang Darma inget jing tugase. Mulane Nyi Endhang Darma pura-pura njaluk idin pengen adus ning kali Cimanuk. Sebab awake ngerasa kotor entas tandhing jurit. Sawise diidini, Nyi Endhang Darma gage njujug kali Cimanuk. Dheweke anjrem slulup bari mudik  ning asale.<br>
Raden Wiralodra krasa uwis suwe ngenteni wong adus, Dheweke ngulap-ngulapi ning pinggir kali Cimanuk. Nyi Endhang Darma ora ana tandha-tandhane, Raden Wiralodra getun beli kejagan. Ning kono, dheweke mawas diri. Dingin pinasti anyar pinanggih, bokan uwis kudune Raden Wiralodra beli kelakon karo Nyi Endhang Darma.
Encak manggone Nyi Endhang Darma dadi padukuhan, Padukuhan mau diarani Padukuhan Darma Ayu. Sateruse Katelah dadi Dermayu.
                            </p>
                          </p>
                      </div>
                    </td>
                  </tr>
                </table>
      
      <br><br>
      </div>
    </div></pre>
                            </p>
                          </p>
                      </div>
                    </td>
                  </tr>
                </table>
      
      <br><br>
      </div>
    </div>
  <!--content-->

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
