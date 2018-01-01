
    <!--content-->
  <div style="height: 1000px;">
    <form action="" method="POST">
      <table width="50%" style="margin-top: 200px;" align="center">    
        <tr>
          <td><label class="control-label"><b>Nama</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="nama" placeholder="Nama" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Email</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="email" class="form-control" name="email" placeholder="Email" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Asal Daerah</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="asald" placeholder="Asal Daerah" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Asal Sekolah</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="asals" placeholder="Asal Sekolah" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Pendidikan</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Password</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="password" class="form-control" name="pwd" placeholder="Password" required></div></td>
        </tr>
        <tr>
          <td><label class="control-label"><b>Umur</b></label></td>
          <td><b>:</b></td>
          <td><div class="col-sm-10"><input type="text" class="form-control" name="umur" placeholder="Umur" required></div></td>
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
      $insert = mysqli_query($koneksi, "INSERT INTO user(User_Name,Password,umur,Email,Asal_Daerah,Asal_Sekolah,Pendidikan) VALUES
        ('".$_POST['nama']."',
          '".$_POST['pwd']."',
          '".$_POST['umur']."',
          '".$_POST['email']."',
          '".$_POST['asald']."',
          '".$_POST['asals']."',
          '".$_POST['pendidikan']."')");

        if($insert){
          echo "berhasil disimpan";
        }
        else{
          echo "<script>
                  alert('Maaf, Id yang anda masukkan mungkin sudah digunakan.');
                </script>".mysqli_error($koneksi);
        }
    }

    ?>

    <!--end content-->

