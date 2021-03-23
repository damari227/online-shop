<?php 
include 'admin/db.php';
  
$id = $_GET['id'];
  
  $result = mysqli_query($mysqli, "SELECT * FROM product WHERE id='$id'");
 
  while($produk = mysqli_fetch_array($result)) {
?>
<html>
<head>
    <title>Produk | <?= $produk['nama'];?></title>
	<meta name='viewport' content="width-device-width, initial-scale=1.1">
	<link rel='stylesheet' href='products.css'>
</head>
  <body>
  <div class='header'>
		    <a>TokoKu</a>
		</div>
		
           <nav class='navigasi'>
			          <div class='opsi-navigasi'>
				             <a href='index.php'><div class='opsi-nya'>Home</div></a>
						     <a href='admin/'><div class='opsi-nya'>Admin</div></a>
							 <div class='opsi-nya'>Layanan</div>
				       </div>
			      </nav>
				  
				  
      <div class='wrapper'>
	       <div class='produk-wrapper'>
		       <div class='gambar'>
				    <img class='foto' src='<?='admin/gambar_db/'.$produk['gambar'];?>'>
				</div>
				  <div class='rincian-produk'>
				      <div class='nama-produk'>
				          <a><?= $produk['nama'];?></a>
				      </div>
					     <hr />
				      <div class='harga-produk'>
				          <a>Rp. <?= $produk['harga'];?></a>
				      </div>
					      <a href="chekout.php?id=<?=$produk['id'];?>">
					          <button class='aksi'>Beli</button>
						  </a>
				      </div>
				      <div class='deskripsi'>
					  <b>Deskripsi</b>
					     <hr />
				          <a><?= $produk['deskripsi'];?></a>
				     </div>
		   </div>
	  </div>
  </body>
</html>
  <?php } ?>