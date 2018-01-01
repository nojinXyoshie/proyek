<?php
 
    include_once("koneksi kuis.php"); 
    
 
    session_start();
 
    $query = mysqli_query($koneksi, "select * from soal_mudah");
 
    //$_SESSION['soal'] = mysql_fetch_array($query);
 
    $_SESSION['soal'] = array();
 
    $_SESSION['no'] = 1;
 
    $_SESSION['score'] = 0;
 
    $_SESSION['option'] = array();
 
    $_SESSION['jawab'] = array();
 
    $i=0;
 
    while($row = mysqli_fetch_assoc($query)){
 
        $_SESSION['soal'][] = $row;
 
        $_SESSION['option'][] = array($_SESSION['soal'][$i]['a'], $_SESSION['soal'][$i]['b'], $_SESSION['soal'][$i]['c'], $_SESSION['soal'][$i]['d']);
 
        $i++;
 
    }
 
    if(isset($_SESSION['soal'])){
 
        header("location:test_lat_mudah.php");
 
    }
 
?>