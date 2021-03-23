<?php
include 'db.php';

$id = $_GET['id'];
mysqli_query($mysqli, "DELETE FROM product WHERE id='$id'");
header('location: produk.php');
?>