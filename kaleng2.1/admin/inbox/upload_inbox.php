<?php

$data_edit = mysqli_query($koneksi, "SELECT * FROM kontak WHERE no ='".$_GET['no']."'");
$result = mysqli_fetch_array($data_edit);


?>



    <!--content-->
  <div style="height: 500px;">
    <form action="" method="POST">
      <table width="80%" style="margin-top: 250px;" align="center">     
        <tr>
          <td><label class="control-label"><b>Nama</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="nama" value="<?php echo $result['nama']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Pesan</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="pesan" value="<?php echo $result['pesan']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Balasan</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><textarea class="form-control" type="text" name="balasan" value="" ><?php echo $result['balasan']; ?></textarea></div></td>
        </tr>
        <tr>
          <td>
            <div class="col-sm-offset-2 col-sm-10" style="margin-top: 40px;">
              <input class="btn btn-primary btn-sm btn-block" type="submit" name="upload" value="Simpan">
            </div>  
          </td>
        </tr>                
      </table>
      
    </form>
    <?php
    $query2 = mysqli_query($koneksi, "SELECT * FROM kontak WHERE no='no'");

    if(isset($_POST['upload'])){
      $insert = mysqli_query($koneksi, "INSERT INTO list_pertanyaan(nama,pesan,balasan) VALUES
        ('".$_POST['nama']."',
          '".$_POST['pesan']."',
          '".$_POST['balasan']."')");

        if($insert){
          echo "<script>
                  alert('Berhasil diupload.');
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
    <!--end content-->

