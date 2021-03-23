<?php
include ('db.php');
$result = mysqli_query($mysqli, "SELECT * FROM product");
?>
<html>
   <head>
     <title>Kelola Produk</title>
	 <meta name='viewport' content='width=device-width, initial-scale=1'/>
	 <link rel='stylesheet' href='produk.css'/>
   </head>
   <body>
      <div class='container'>
	     <div class='header-wrapper'>
		   <div class='header'>
		      <a>Pengaturan Produk</a>
		   </div>
		 </div>
		 <div class='content'>
		    <?php
			while($produk = mysqli_fetch_array($result)) {
			?>
			<div class='col'>
			   <div class='card'>
			     <img class='thumbnail' src='gambar_db/<?=$produk['gambar']?>'>
				 <div class='card-body'>
				    <a class='card-name'><?=$produk['nama'];?></a>
					<br />
					<a class='card-price'>Rp. <?=$produk['harga'];?></a>
					<div class='card-action'>
					   <a href='hapus_produk.php?id=<?=$produk['id'];?>'>Hapus</a>
					</div>
				 </div>
			   </div>
			</div>
			<?php } ?>
		 </div>
	  </div>
   </body>
</html>