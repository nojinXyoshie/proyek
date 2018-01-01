

    <style>
      #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 80%;
      }

      #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: center;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}
      #customers td a:hover {background: gray;}

      #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: orange;
          color: white;
          text-align: center;
        }

      .button {
          background-color: orange;
          border: none;
          color: white;
          padding: 10px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          width: 100%;
        }
      }
    </style>

  

        <!--content-->
        <?php
if($Id_Admin){
  ?>
  <div style="height: auto; margin-bottom: 40px;" align="center">
    <table id="customers" border="1" width="80%" style="margin-top: 250px;">
      <tr style="text-align: center;">
        <th><b>Id Materi</b></th>
        <th><b>Judul Materi</b></th>
        <th><b>Isi Materi</b></th>
        <th><b>Opsi</b></th>
      </tr>
      <?php
      $select=mysqli_query($koneksi, "SELECT * FROM materi order by Id_materi asc");
      while($isi = mysqli_fetch_array($select)){
      ?>
      <tr style="text-align: center;">
        <td><?php echo $isi['Id_materi'] ?></td>
        <td><?php echo $isi['judul_materi'] ?></td>
        <td><?php echo $isi['isi'] ?></td>
        <td><a href="delete_materi.php?id_materi=<?php echo $isi['Id_materi']?>"><input class="btn btn-primary btn-sm btn-block" type="submit" value="Hapus"></a></td>
      </tr>
      <?php } ?>      
    </table>
    <!-- Trigger the modal with a button -->
    <table style="margin-bottom: 30px;">
      <tr>
        <td style="padding-right: 30px;">
          <div class="show_hide">
          <button type="button" class="btn btn-info btn-lg" style="margin-top: 50px;">Tambah Materi</button>
          </div>
        </td>
        <td>
          <a href="index.php?page=kelola_lat_mudah"><button type="button" class="btn btn-info btn-lg" style="margin-top: 50px;">Kelola Latihan Soal</button></a>
        </td>
      </tr>
    </table>
    <div style="width: 90%" class="slidingDiv">
      <div>
        <form action="" method="POST">
          <table width="90%" align="center">
            <tr>
              <td><label class="control-label"><b>Id Materi</b></label></td>
              <td><b>:</b></td>
              <td><div class="col-sm-10"><input type="text" class="form-control" name="id_materi" placeholder="Id Materi" required></div></td>
            </tr>   
            <tr>
              <td><label class="control-label"><b>Judul Materi</b></label></td>
              <td><b>:</b></td>
              <td><div class="col-sm-10"><input type="text" class="form-control" name="judul_materi" placeholder="Judul Materi" required></div></td>
            </tr>    
            <tr>
              <td><label class="control-label"><b>Isi Materi</b></label></td>
              <td><b>:</b></td>
              <td><div class="col-sm-10"><textarea type="text" class="form-control" name="materi" placeholder="Isi Materi"></textarea></div></td>
            </tr>  
            <tr>
              <td>
                <div class="col-sm-offset-2 col-sm-6">
                  <input class="btn btn-primary btn-md btn-block" type="submit" name="upload" value="Upload">
                </div>
              </td>
            </tr>                
          </table>
        </form>
      </div>  
    </div>
  </div>

<?php
}
?>
   
    <?php


    if(isset($_POST['upload'])){
      $insert = mysqli_query($koneksi, "INSERT INTO materi(id_materi,judul_materi,isi) VALUES
        ('".$_POST['id_materi']."',
         '".$_POST['judul_materi']."',
         '".$_POST['materi']."')");

        if($insert){
          echo "<script>
                  alert('Materi Berhasil disimpan.');
                </script>";
        }
        else{
          echo "<script>
                  alert('Maaf, Id yang anda masukkan mungkin sudah digunakan.');
                </script>".mysqli_error($koneksi);
        }
    }

    ?>

    <!--end content-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      $(".slidingDiv").hide();
      $(".show_hide").show();

      $('.show_hide').click(function(){
      $(".slidingDiv").slideToggle();
      });

    });
    </script>

