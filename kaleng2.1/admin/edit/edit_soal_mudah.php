<?php

$data_edit = mysqli_query($koneksi, "SELECT * FROM soal_mudah WHERE no ='".$_GET['no']."'");
$result = mysqli_fetch_array($data_edit);

?>




    <!--content-->
  <div style="height: 1000px;">
    <form action="" method="POST">
      <table width="50%" style="margin-top: 200px;" align="center">     
        <tr>
          <td>Soal no.<?php echo $result['no']; ?></td>
        </tr>
        <tr>
          <td>Soal</td>
          <td>:</td>
          <td><textarea type="text" name="soal" required><?php echo $result['soal']; ?></textarea></td>
        </tr>
        <tr>
          <td>Jawaban a</td>
          <td>:</td>
          <td><input type="text" name="a" value="<?php echo $result['a']; ?>" required></td>
        </tr>
        <tr>
          <td>Jawaban b</td>
          <td>:</td>
          <td><input type="text" name="b" value="<?php echo $result['b']; ?>" required></td>
        </tr>
        <tr>
          <td>Jawaban c</td>
          <td>:</td>
          <td><input type="text" name="c" value="<?php echo $result['c']; ?>" required></td>
        </tr>
        <tr>
          <td>Jawaban d</td>
          <td>:</td>
          <td><input type="text" name="d" value="<?php echo $result['d']; ?>" required></td>
        </tr>
        <tr>
          <td>Kunci Jawaban</td>
          <td>:</td>
          <td><input type="text" name="kunci" value="<?php echo $result['kunci']; ?>" required></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="edit" value="Simpan">
          </td>
        </tr>                
      </table>
      
    </form>
    <?php
    $query2 = mysqli_query($koneksi, "SELECT * FROM soal_mudah WHERE no='no'");

    if(isset($_POST['edit'])){
      if(mysqli_num_rows($query2) == 1){
        echo "edit gagal";
      }
      else{
      $update = mysqli_query($koneksi, "UPDATE soal_mudah SET soal = '".$_POST['soal']."',
        a = '".$_POST['a']."', b = '".$_POST['b']."', c = '".$_POST['c']."', d = '".$_POST['d']."',
        kunci = '".$_POST['kunci']."' WHERE no = '".$_GET['no']."'");
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
