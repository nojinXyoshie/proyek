
    <!--content-->    
<div style="margin-top: 50px; margin-bottom: 100px; margin-left: 20px;">
<div class="jumbotron container">
  <div class="row">
    <div class="col-sm-12">
    <h2>Daftar Pertanyaan Populer</h2>
    <p>Pertanyaan teman - teman yang dikirim melalui fitur contact yang sekiranya bermanfaat bagi pengunjung lain yang mengalami kasus yang sama akan kami upload pada fitur daftar pertanyaan populer ini. Kami selalu berusaha untuk memberikan kenyamanan bagi pengunjung yang ingin belajar bahasa indramayu, semoga dapat membantu. ^_^</p>
<table width="90%">
  <?php
      $select=mysqli_query($koneksi, "SELECT * FROM list_pertanyaan order by no asc");
      while($isi = mysqli_fetch_array($select)){
  ?>
   <tr>
      <td>
        <div class="show_hide<?php echo $isi['no'] ?>" style="font-size: 17px; margin-top: 20px; background-color: #212529; padding: 5px; height: auto; width: 90%; color: gold;">
           <b>
            <p style="background-color: gray;">Q<?php echo $isi['no'] ?>. Oleh <?php echo $isi['nama'] ?></p>
            "<?php echo $isi['pesan'] ?>"
           </b>
        </div>
         <div style="width: 90%" class="slidingDiv<?php echo $isi['no'] ?>">
          <b><p>A<?php echo $isi['no'] ?>. Oleh Admin.</p></b>
          "<?php echo $isi['balasan'] ?>"
         </div>
      </td>
   </tr>

</table>
<style type="text/css">
  .slidingDiv<?php echo $isi['no'] ?> {
    height:300px;
    font-size: 17px;
    background-color: white;
    padding:20px;
    margin-top:10px;
    border-bottom:5px solid #3399FF;
  }

  .show_hide<?php echo $isi['no'] ?> {
    display:none;
  }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){

  $(".slidingDiv<?php echo $isi['no'] ?>").hide();
  $(".show_hide<?php echo $isi['no'] ?>").show();

  $('.show_hide<?php echo $isi['no'] ?>').click(function(){
  $(".slidingDiv<?php echo $isi['no'] ?>").slideToggle();
  });

});
</script>
   <?php } ?>
    </div>
   </div>
  </div>
</div>
 
    <!--end content-->


