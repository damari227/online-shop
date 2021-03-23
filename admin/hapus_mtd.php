<?php
   include('db.php');
   
   $id = $_GET['id'];
   
   mysqli_query($mysqli, "DELETE FROM metode_pembayaran WHERE id='$id'");
   
   header("location: pengaturan_toko.php");
?>