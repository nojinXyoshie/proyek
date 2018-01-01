<?php

$data_edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user ='".$_GET['id_user']."'");
$result = mysqli_fetch_array($data_edit);

?>



    <!--content-->
  <div style="height: 500px;">
    <form action="" method="POST">
      <table width="50%" style="margin-top: 250px;" align="center">     
        <tr>
          <td><label class="control-label"><b>Nama</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="nama" value="<?php echo $result['User_Name']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Password</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="password" name="pwd" value="<?php echo $result['Password']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Umur</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="umur" value="<?php echo $result['umur']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Email</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="email" name="email" value="<?php echo $result['Email']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Asal Daerah</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="asald" value="<?php echo $result['Asal_Daerah']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Asal Sekolah</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="asals" value="<?php echo $result['Asal_Sekolah']; ?>" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Pendidikan</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input class="form-control" type="text" name="pendidikan" value="<?php echo $result['Pendidikan']; ?>" required></div></td>
        </tr>
        <tr>
          <td>
            <div class="col-sm-offset-2 col-sm-10" style="margin-top: 40px;">
              <input class="btn btn-primary btn-sm btn-block" type="submit" name="edit" value="Simpan">
            </div>
          </td>
        </tr>                
      </table>
      
    </form>
    <?php
    $query2 = mysqli_query($koneksi, "SELECT * FROM user WHERE Id_User='id_user'");

    if(isset($_POST['edit'])){
      if(mysqli_num_rows($query2) == 1){
        echo "edit gagal";
      }
      else{
      $update = mysqli_query($koneksi, "UPDATE user SET User_Name = '".$_POST['nama']."',
        Email = '".$_POST['email']."', Asal_Daerah = '".$_POST['asald']."', Asal_Sekolah = '".$_POST['asals']."', Password = '".$_POST['pwd']."',
        Pendidikan = '".$_POST['pendidikan']."', umur = '".$_POST['umur']."' WHERE Id_User = '".$_GET['id_user']."'");
      if ($update) {
        echo "<script>
                  alert('Edit Berhasil.');
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

