<?php


$data_edit = mysqli_query($koneksi, "SELECT * FROM kontak WHERE no ='".$_GET['no']."'");
$result = mysqli_fetch_array($data_edit);


?>



    <!--content-->
  <div style="height: 500px;">
    <form action="" method="POST">
      <table width="80%" style="margin-top: 250px;" align="center">     
        <tr>
          <td>Pesan no.<?php echo $result['no']; ?></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Tulis Balasan</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-md-12"><textarea type="text" class="form-control" name="balas" ></textarea></div></td>
        </tr>  
        <tr>
          <td>
            <div class="col-sm-offset-2 col-sm-10" style="margin-top: 40px;">
              <input class="btn btn-primary btn-sm btn-block" type="submit" name="simpan" value="Simpan">
            </div>  
          </td>
        </tr>                
      </table>
      
    </form>
    <?php
    $query2 = mysqli_query($koneksi, "SELECT * FROM kontak WHERE no='no'");

    if(isset($_POST['simpan'])){
      if(mysqli_num_rows($query2) == 1){
        echo "edit gagal";
      }
      else{
      $update = mysqli_query($koneksi, "UPDATE kontak SET balasan = '".$_POST['balas']."' WHERE no = '".$_GET['no']."'");
      if ($update) {
        echo "<script>
                  alert('Pesan Berhasil Terbalas.');
                </script>";
      }
      else if(!$update){
        echo 'gagal'.mysqli_error($koneksi);
        }
      }
    }

    ?>
</div>
    <!--end content-->

