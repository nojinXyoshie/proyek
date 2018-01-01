

   <!-- Content -->
   <?php
      $select=mysqli_query($koneksi, "SELECT * FROM user where Id_User = '".$_SESSION['Id_User']."' order by Id_User asc");
      $isi = mysqli_fetch_array($select);
    ?>
   <div align="center">
      <div class="jumbotron" style="width: 50%; margin-top: 300px;" align="center">
        <h1 class="display-3">Hello, <?php echo "$User_Name"; ?></h1>
        <p class="lead">Silahkan uji kemampuan anda dalam bahasa indramayu dengan mengerjakan kuis yang kami sediakan berdasarkan semua pelajaran/materi yang ada di laman ini, Good Luck!</p>
        <hr class="my-4">
        <?php
          if($isi['score']>=1){
        ?>
        <p><h6 class="display-5">Score terahir Anda mengerjakan kuis : <?php echo $isi['score'] ?></p>
        <?php
          }
          else{
            echo "<p><h6 class='display-5'>Anda belum pernah mengerjakan kuis, silahkan klik tombol dibawah untuk memulai.</p>";
          }
        ?>  
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="index soal.php" role="button">Mulai Kuis</a>
        </p>
      </div>
    </div>  
   <!-- content -->
    


