<?php
    session_start();
	
	if(!$_SESSION['login']) {
		header("location: login.php");
	}
	
	include 'db.php';
	
?>
<html>
   <head>
        <title>Halaman Admin</title>
	    <meta name='viewport' content="width-device-width, initial-scale=1">
		<link rel='stylesheet' href='style.css'>
   </head>

   <body>
 <div class='header'>
     <a>Admin center</a>
	      <a class='keluar' href='keluar.php'><button>Keluar</button></a>
		  <a class='keluar' href='upload.php'><button>Unggah</button></a>
		  <a class='keluar' href='pengaturan_toko.php'><button>Pengaturan</button></a>
	 </div>
	
    <br />
       <div class='wrapper'>
	      <div class='judul-wrapper'>
	            <b>Pesanan</b>
				   </div>
<?php

$result = mysqli_query($mysqli, "SELECT * FROM pesanan");

while($pesanan=mysqli_fetch_array($result)) {  
?>
	         <div class='pesanan-wrapper'>
			      <div class='nama-rows'>
				      <a>Pembayaran</a>
				  </div>
				  <div class='nama-rows'>
				      <a>Nama Produk</a>
				  </div>
				  <div class='nama-rows'>
				      <a>Harga</a>
				  </div>
				  <div class='nama-rows'>
				      <a>Nama Pembeli</a>
				  </div>
				  <div class='nama-rows'>
				      <a>No Ponsel</a>
				  </div>
				  
				  <div class='foto-produk'>
				      <?php echo $pesanan['metode']; ?>
				  </div>
				  <div class="nama-produk">
				      <?php echo $pesanan['nama']; ?>
				  </div>
				  <div class='harga-produk'>
				      <?php echo $pesanan['harga']; ?>
				  </div>
				  <div class='nama-pembeli'>
				      <?php echo $pesanan['nama_pembeli'];?>
				  </div>
				  <div class='no-hp'>
				      <?php echo $pesanan['no_ponsel'];?>
				  </div>
			</div>
				  <div class='alamat'>
				      Alamat : <?php echo $pesanan['Alamat'];?>
				  </div>
				  <div class='tombol-aksi'>
				      <a href='hapus.php?id=<?=$pesanan['id'];?>'><button>Batalkan</button></a>
				  </div>
<?php		
 }
?>
	   </div>
   </body>
</html>