
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
  <div style="height: auto; margin-bottom: 50px;" align="center">
    <table id="customers" border="1" width="80%" style="margin-top: 200px; margin-bottom: 50px;">
      <tr style="text-align: center;">
        <th><b>Id Pelajaran</b></th>
        <th><b>Judul</b></th>
        <th><b>Isi</b></th>
        <th><b>opsi</b></th>
      </tr>
      <?php
      $select=mysqli_query($koneksi, "SELECT * FROM pelajaran order by Id_pelajaran asc");
      while($isi = mysqli_fetch_array($select)){
      ?>
      <tr style="text-align: center;">
        <td><?php echo $isi['Id_pelajaran'] ?></td>
        <td><?php echo $isi['judul'] ?></td>
        <td><?php echo $isi['isi'] ?></td>
        <td><a class="button" href="edit_pelajaran.php?id_pelajaran=<?php echo $isi['Id_pelajaran']?>">Edit</a><a class="button" href="delete_pelajaran.php?id_pelajaran=<?php echo $isi['Id_pelajaran']?>">Hapus</a></td>
      </tr>
      <?php } ?>      
    </table>
    <br><br>
    <div class="show_hide">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" style="margin-top: 50px; margin-bottom: 100px;">Tambah Pelajaran</button>
    </div>
    <div style="width: 90%" class="slidingDiv">
      <div>
          <form action="" method="POST">
            <table width="96%" align="center">    
              <tr>
                <td><label class="control-label"><b>Id Pelajaran</b></label></td>
                <td><b>:</b></td>
                <td><div class="col-sm-10"><input type="text" class="form-control" name="id_pelajaran" required></div></td>
              </tr>
              <tr>
                <td><label class="control-label"><b>Judul</b></label></td>
                <td><b>:</b></td>
                <td><div class="col-sm-10"><input type="text" class="form-control" name="judul" required></div></td>
              </tr>
              <tr>
                <td><label class="control-label"><b>Isi Pelajaran</b></label></td>
                <td><b>:</b></td>
                <td><div class="col-sm-10"><textarea type="text" name="isi"></textarea></div></td>
              </tr>
              <tr>
                <td> 
                <div class="col-sm-offset-2 col-sm-6">
                  <input class="btn btn-primary btn-md btn-block" type="submit" name="simpan" value="Simpan">
                </div>
                </td>
              </tr>                
            </table>
          </form>
  <?php
    if(isset($_POST['simpan'])){
      $insert = mysqli_query($koneksi, "INSERT INTO pelajaran(Id_pelajaran,judul,isi) VALUES
        ('".$_POST['id_pelajaran']."',
          '".$_POST['judul']."',
          '".$_POST['isi']."')");

        if($insert){
          echo "<script>
                  alert('berhasil disimpan');
                </script>";
        }
        else{
          echo "<script>
                  alert('Maaf, Id yang anda masukkan mungkin sudah digunakan.');
                </script>".mysqli_error($koneksi);
        }
    }
 ?>
        </div>
    </div>
  </div>  
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
    <!--end content-->




