<?php
include 'admin/db.php';
?>
<html>
<head>
    <title>TokoKu</title>
	<meta name='viewport' content="width-device-width, initial-scale=1.1">
	<link rel='stylesheet' href='index.css'/>
</head>
   <body>
        <div class='header'>
		    <a>TokoKu</a>
		</div>
        <nav class='navigasi'>
			          <div class='opsi-navigasi'>
				             <div class='opsi-nya'>Home</div>
						     <a href='admin/'><div class='opsi-nya'>Admin</div></a>
							 <div class='opsi-nya'>Layanan</div>
				       </div>
			      </nav>
		
		<div class='wrapper-content'>
<?php
	$result = mysqli_query($mysqli, "SELECT id,gambar,nama,harga FROM product");
	
	while($produk=mysqli_fetch_array($result)) {
?>
		     <div class='produk-wrapper'>
			      <div class='gambar-produk'>
				      <img class='foto' src="<?php echo 'admin/gambar_db/'.$produk['gambar'];?>">
				  </div>
				  <div class='garis-pembatas'></div>
				  <div class='nama-produk'>
				      <?php echo $produk['nama'];?>
				  </div>
				  <div class='harga-produk'>
				  Rp. <?php echo $produk['harga'];?>
				  </div>
				  <div class='tombol-aksi'>
				      <a href="produk.php?id=<?=$produk['id']?>">
				          <button>Lihat</button>
						  </a>
				  </div>
			 </div>
	<?php } ?>
	         <div class='produk-wrapper'>
			      <div class='gambar-produk'>
				      <img class='foto' src="admin/gambar_db/5f026afeb6b9a.jpg">
				  </div>
				  <div class='garis-pembatas'></div>
				  <div class='nama-produk'>
				      Jaket				  </div>
				  <div class='harga-produk'>
				  Rp. 200000				  </div>
				  <div class='tombol-aksi'>
				      <a href="produk.php?id=39">
				          <button>Lihat</button>
						  </a>
				  </div>
			 </div>
			     <div class='produk-wrapper'>
			      <div class='gambar-produk'>
				      <img class='foto' src="admin/gambar_db/5f026b9ac20bd.jpg">
				  </div>
				  <div class='garis-pembatas'></div>
				  <div class='nama-produk'>
				      Kacamata				  </div>
				  <div class='harga-produk'>
				  Rp. 50000				  </div>
				  <div class='tombol-aksi'>
				      <a href="produk.php?id=41">
				          <button>Lihat</button>
						  </a>
				  </div>
			 </div>
			     <div class='produk-wrapper'>
			      <div class='gambar-produk'>
				      <img class='foto' src="admin/gambar_db/5f026bb9a67b8.jpg">
				  </div>
				  <div class='garis-pembatas'></div>
				  <div class='nama-produk'>
				      Topi				  </div>
				  <div class='harga-produk'>
				  Rp. 75000				  </div>
				  <div class='tombol-aksi'>
				      <a href="produk.php?id=42">
				          <button>Lihat</button>
						  </a>
				  </div>
			 </div>
		</div>
   </body>
</html>