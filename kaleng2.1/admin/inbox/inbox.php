

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
  <div style="height: 1000px;" align="center">
  <form method="post">
    <table id="customers" border="1" width="80%" style="margin-top: 200px;">
      <tr style="text-align: center;">
        <th><b>nomor</b></th>
        <th><b>nama pengirim</b></th>
        <th><b>email</b></th>
        <th><b>no. hp</b></th>
        <th><b>pesan</b></th>
        <th><b>balasan</b></th>
        <th><b>Opsi</b></th>
      </tr>
      <?php
      $select=mysqli_query($koneksi, "SELECT * FROM kontak order by no asc");
      while($isi = mysqli_fetch_array($select)){
      ?>
      <tr style="text-align: center;">
        <td><?php echo $isi['no'] ?></td>
        <td><?php echo $isi['nama'] ?></td>
        <td><?php echo $isi['email'] ?></td>
        <td><?php echo $isi['hp'] ?></td>
        <td><?php echo $isi['pesan'] ?></td>
        <td><pre><?php echo $isi['balasan'] ?></pre></td>
        <td><a class="button" href="index.php?page=balas_inbox&no=<?php echo $isi['no']?>">Balas </a><br><a class="button" href="index.php?page=upload_inbox&no=<?php echo $isi['no']?>"> Upload</a><br><a class="button" href="delete_inbox.php?no=<?php echo $isi['no']?>"> Hapus</a></td>
      </tr>
      <?php } ?>      
    </table>
    </form>
  </div>  
    <!--end content-->
    <?php
  if(isset($_POST['upload'])){
    $upload = mysqli_query($koneksi, "INSERT INTO list_pertanyaan (no,nama,pesan,balasan) VALUES 
        ('".$_POST['no']."',
          '".$_POST['nama']."',
          '".$_POST['pesan']."',
          '".$_POST['balasan']."')");
    if($upload){
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


