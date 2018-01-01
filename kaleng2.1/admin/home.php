<!--content-->
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#konten, .thumbnail{
    border: 1px solid #ddd;
    padding: 8px;
    border-radius: 10px;
}

.thumbnail:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<div class="row" id="konten">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/admin/sett.jpg" alt="" width="100%" height="350px">
      <div class="caption">
        <h3>Kelola Pelajaran</h3>
        <p><a href="index.php?page=kelola_pel" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/home/babad.jpg" width="100%" height="350px" alt="">
      <div class="caption">
        <h3>Aksara Jawa</h3>
        <p><a href="index.php?page=aksara" class="btn btn-primary" role="button">Lihat</a> <a href="" class="btn btn-default" role="button"></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/admin/sett.jpg" width="100%" height="350px">
        <div class="caption">
          <h3>Inbox</h3>               
          <p><a href="index.php?page=inbox" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
        </div>
    </div>
  </div>
</div>

<div class="row" id="konten">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/admin/sett.jpg" alt="" width="100%" height="350px">
      <div class="caption">
        <h3>Data Admin</h3>
        <p><a href="index.php?page=data_admin" class="btn btn-primary" role="button">Lihat</a> <a href="" class="btn btn-default" role="button"></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/admin/sett.jpg" alt="" width="100%" height="350px">
      <div class="caption">
        <h3>Tambah Admin</h3>
        <p><a href="index.php?page=tambah_admin" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/admin/sett.jpg" alt="" width="100%" height="350px">
      <div class="caption">
        <h3>Data User</h3>
        <p><a href="index.php?page=data_user" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/admin/sett.jpg" alt="" width="100%" height="350px">
      <div class="caption">
        <h3>Tambah User</h3>
        <p><a href="index.php?page=tambah_user" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
      </div>
    </div>
  </div>
</div>
         <div class="row" id="konten">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/admin/sett.jpg" width="100%" height="350px">
              <div class="caption">
                <h3>Kelola Materi Mudah</h3>
                <p><a href="index.php?page=upload_materi_mudah" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>         
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/admin/sett.jpg" width="100%" height="350px">
              <div class="caption">
                <h3>Kelola Materi Sedang</h3>
                <p><a href="index.php?page=upload_materi_sedang" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/admin/sett.jpg" width="100%" height="350px">
              <div class="caption">
                <h3>Kelola Materi Sedang</h3>
                <p><a href="index.php?page=upload_materi_sulit" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
              </div>
            </div>
          </div>
          <?php
            if($Id_Admin){
              ?>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="img/admin/sett.jpg" width="100%" height="350px">
                  <div class="caption">
                    <h3>Kelola Kuis</h3>
                    <p><a href="index.php?page=kelola_kuis" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
                  </div>
                </div>
              </div>
          <?php
            }
            else if($Id_User){

            }
            else{
          ?>    
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/admin/sett.jpg" width="100%" height="100%">
              <div class="caption">
                <h3>Login</h3>
                <p>Silahkan buat akun anda yang berfungsi untuk mengakses situs kuis pada website kami</p>
                <p><a href="reg.php" class="btn btn-primary" role="button">Lihat</a> <a href="#" class="btn btn-default" role="button"></a></p>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
        </div>

         <div class="row" id="konten">
          
        </div>
<!-- content -->