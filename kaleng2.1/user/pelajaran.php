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
<!-- Content -->
    <div class="jumbotron" style="background-color: #4CAF50;">
         <div class="row">
        <?php
          $select=mysqli_query($koneksi, "SELECT * FROM pelajaran order by Id_pelajaran asc");
          while($isi = mysqli_fetch_array($select)){
        ?>         
          <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
              <img src="img/pelajaran/pelajaran<?php echo $isi['Id_pelajaran'] ?>.jpg" width="100%" height="300">
                <div class="caption">
                  <h3><?php echo $isi['judul'] ?></h3>
                  <p><a href="pelajaran/pelajaran<?php echo $isi['Id_pelajaran'] ?>.php" class="btn btn-primary" role="button">Lihat</a> </p>
                </div>
            </div>
          </div>
        <?php } ?> 

     <br><br>
      </div>
    </div>

        <!-- Saran Pelajaran -->

          <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
              Pelajaran yang disarankan :
                <div class="row">
                  <div class="col-sm-4">
                    <div class="col-sm-4">
                    <a href="pelajaran/pelajaran4.php" class="btn btn-primary" role="button">Ujian Nasional</a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-sm-4">
                    <a href="pelajaran/pelajaran3.php" class="btn btn-primary" role="button">perkenalan</a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-sm-4">
                    <a href="pelajaran/pelajaran2.php" class="btn btn-primary" role="button">nglakoni pegawean umah</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 text-center"><br><br>
              <div class="col-sm-12">
                <ul class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Memilih Pelajaran
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="pelajaran/pelajaran2.php">Pelajaran 1</a>
                <a class="dropdown-item" href="pelajaran/pelajaran1.php">Pelajaran 2</a>
                <a class="dropdown-item" href="pelajaran/pelajaran4.php">Pelajaran 3</a>
                <a class="dropdown-item" href="pelajaran/pelajaran3.php">Pelajaran 4</a>
                <a class="dropdown-item" href="pelajaran/pelajaran5.php">Pelajaran 5</a>
              </div>
            </ul>
              </div>
            </div>
          </div>
        </div><br><br>

 