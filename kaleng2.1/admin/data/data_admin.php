

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
    <table id="customers" border="1" width="80%" style="margin-top: 200px;">
      <tr style="text-align: center;">
        <th><b>id admin</b></th>
        <th><b>nama</b></th>
        <th><b>email</b></th>
        <th><b>asal daerah</b></th>
        <th><b>password</b></th>
        <th><b>no. hp</b></th>
        <th><b>Opsi</b></th>
      </tr>
      <?php
      $select=mysqli_query($koneksi, "SELECT * FROM admin");
      while($isi = mysqli_fetch_array($select)){
      ?>
      <tr style="text-align: center;">
        <td><?php echo $isi['Id_Admin'] ?></td>
        <td><?php echo $isi['User_name'] ?></td>
        <td><?php echo $isi['Email'] ?></td>
        <td><?php echo $isi['Asal_Daerah'] ?></td>
        <td><?php echo $isi['Password'] ?></td>
        <td><?php echo $isi['No_hp'] ?></td>
        <td><a class="button" href="index.php?page=edit_admin&id_admin=<?php echo $isi['Id_Admin']?>">Edit</a><a class="button" href="delete_admin.php?id_admin=<?php echo $isi['Id_Admin']?>">Hapus</a></td>
      </tr>
      <?php } ?>      
    </table>
  </div>  
    <!--end content-->


