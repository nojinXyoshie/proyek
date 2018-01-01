

    <style>
      #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 90%;
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
          width: 80%;
        }
      }
    </style>

    <!--content-->
  <div style="height: auto;" align="center">
    <table id="customers" border="1" width="80%" style="margin-top: 200px; margin-bottom: 50px;">
      <tr style="text-align: center;">
        <th><b>no</b></th>
        <th><b>soal</b></th>
        <th><b>jawaban a</b></th>
        <th><b>jawaban b</b></th>
        <th><b>jawaban c</b></th>
        <th><b>jawaban d</b></th>
        <th><b>kunci jawaban</b></th>
        <th><b>opsi</b></th>
      </tr>
      <?php
      $select=mysqli_query($koneksi, "SELECT * FROM soal_mudah");
      while($isi = mysqli_fetch_array($select)){
      ?>
      <tr style="text-align: center;">
        <td><?php echo $isi['no'] ?></td>
        <td><?php echo $isi['soal'] ?></td>
        <td><?php echo $isi['a'] ?></td>
        <td><?php echo $isi['b'] ?></td>
        <td><?php echo $isi['c'] ?></td>
        <td><?php echo $isi['d'] ?></td>
        <td><?php echo $isi['kunci'] ?></td>
        <td><a class="button" href="index.php?page=edit_soal_mudah&no=<?php echo $isi['no']?>">Edit</a><a class="button" href="delete_soal_mudah.php?no=<?php echo $isi['no']?>">Hapus</a></td>
      </tr>
      <?php } ?>      
    </table>
    <br><br>
      <button type="button" class="btn btn-info btn-lg" style="margin-top: 50px; margin-bottom: 100px;"><div class="show_hide">Tambah Soal</div></button>
    <div style="width: 90%; margin-bottom: 50px;" class="slidingDiv">
      <div>
          <form action="" method="POST">
            <table width="96%" align="center">    
              <tr>
                <td><label class="control-label"><b>No</b></label></td>
                <td><b>:</b></td>
                <td><div class="col-sm-10"><input type="text" class="form-control" name="no" required></div></td>
              </tr>
              <tr>
                <td><label class="control-label"><b>Soal</b></label></td>
                <td><b>:</b></td>
                <td><div class="col-sm-10"><textarea type="text" class="form-control" name="soal"></textarea></div></td>
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
                <div class="col-sm-offset-2 col-sm-6">
                  <input class="btn btn-primary btn-md btn-block" type="submit" name="simpan" value="Simpan">
                </div>
                </td>
              </tr>                
            </table>
          </form>
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


 <?php


    if(isset($_POST['simpan'])){
      $insert = mysqli_query($koneksi, "INSERT INTO soal_mudah VALUES
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




