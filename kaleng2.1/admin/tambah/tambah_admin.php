

    <!--content-->
  <div style="height: 500px;">
    <form action="" method="POST">
      <table width="50%" style="margin-top: 250px;" align="center">
        <tr>
          <td><label class="control-label"><b>Id Admin</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="id_admin" required></div></td>
        </tr>      
        <tr>
          <td><label class="control-label"><b>Nama</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="nama" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Email</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="email" class="form-control" name="email" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Asal Daerah</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="asald" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Password</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="password" class="form-control" name="pwd" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>No. Hp</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="no" required></div></td>
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
  </div>  
    <?php


    if(isset($_POST['simpan'])){
      $insert = mysqli_query($koneksi, "INSERT INTO admin VALUES
        ('".$_POST['id_admin']."',
          '".$_POST['nama']."',
          '".$_POST['email']."',
          '".$_POST['asald']."',
          '".$_POST['pwd']."',
          '".$_POST['no']."')");

        if($insert){
          echo "<script>
                  alert('berhasil disimpan.');
                </script>";
        }
        else{
          echo "<script>
                  alert('Maaf, Id yang anda masukkan mungkin sudah digunakan.');
                </script>";
        }
    }

    ?>

    <!--end content-->

