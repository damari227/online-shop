
<?php
include 'db.php';
	if(isset($_POST['tambahkan'])) {
		$mtd = $_POST['metode'];
		$kde = $_POST['kode'];
		$nmadmn = $_POST['nama-admin'];
		
		
		$result = mysqli_query($mysqli, "INSERT INTO metode_pembayaran(metode,kode,nama) VALUES('$mtd','$kde','$nmadmn')");
		
		header("location: pengaturan_toko.php");
	}
		?>