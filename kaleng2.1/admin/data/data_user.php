
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
  <div style="height: auto;" align="center">
    <table id="customers" border="1" width="80%" style="margin-top: 300px; margin-bottom: 300px;">
      <tr style="text-align: center;">
        <th><b>Id User</b></th>
        <th><b>Nama</b></th>
        <th><b>Password</b></th>
        <th><b>Umur</b></th>
        <th><b>Email</b></th>
        <th><b>Asal Daerah</b></th>
        <th><b>Asal Sekolah</b></th>
        <th><b>Pendidikan</b></th>
        <th><b>Skor Kuis</b></th>
        <th><b>Skor Mudah</b></th>
        <th><b>Skor Sedang</b></th>
        <th><b>Skor Sulit</b></th>
        <th><b>Opsi</b></th>
      </tr>
      <?php
      $select=mysqli_query($koneksi, "SELECT * FROM user order by Id_User asc");
      while($isi = mysqli_fetch_array($select)){
      ?>
      <tr style="text-align: center;">
        <td><?php echo $isi['Id_User'] ?></td>
        <td><?php echo $isi['User_Name'] ?></td>
        <td><?php echo $isi['Password'] ?></td>
        <td><?php echo $isi['umur'] ?></td>
        <td><?php echo $isi['Email'] ?></td>
        <td><?php echo $isi['Asal_Daerah'] ?></td>
        <td><?php echo $isi['Asal_Sekolah'] ?></td>
        <td><?php echo $isi['Pendidikan'] ?></td>
        <td><?php echo $isi['score'] ?></td>
        <td><?php echo $isi['score_lat_mudah'] ?></td>
        <td><?php echo $isi['score_lat_sedang'] ?></td>
        <td><?php echo $isi['score_lat_sulit'] ?></td>
        <td><a class="button" href="index.php?page=edit_user&id_user=<?php echo $isi['Id_User']?>">Edit</a><a class="button" href="delete_user.php?id_user=<?php echo $isi['Id_User']?>">Hapus</a></td>
      </tr>
      <?php } ?>      
    </table>
  </div>  
    <!--end content-->

 
