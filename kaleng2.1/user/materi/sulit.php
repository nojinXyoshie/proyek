
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

