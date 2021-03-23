<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM pesanan WHERE id = '$id'");

header("location: index.php");
?>