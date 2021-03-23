<?php
   include 'admin/db.php';
      
   if(isset($_POST['beli'])) {
	   $nama = $_POST['nama'];
	   $harga = $_POST['harga'];
	   $nama_pembeli = $_POST['nama_pembeli'];
	   $nohp = $_POST['no-handphone'];
	   $alamat = $_POST['alamat'];
	   $metode = $_POST['pembayaran-yang-dipilih'];
	   
	   
	   $result = mysqli_query($mysqli, "INSERT INTO pesanan(nama,harga,nama_pembeli,no_ponsel,Alamat,metode) VALUES('$nama','$harga','$nama_pembeli','$nohp','$alamat','$metode')");
	   
	   echo "<script>
	       alert('produk berhasil di pesan');
	   </script>";
	   }
  

   
   $id = $_GET['id'];
   
   $result = mysqli_query($mysqli, "SELECT * FROM product WHERE id='$id'");
   
   $product = mysqli_fetch_array($result);
?>
<html>
   <head>
      <title>Chekout | <?= $product['nama'];?></title>
	  <meta name='viewport' content="width-device-width, initial-scale=1.1">  
	  <link rel="stylesheet" href="cekout.css">
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
       <form action='' method='post'>
		<div class='kasir-wrapper'>
	        <center><a>Chekout</a></center>
		    <div class='gambar'>
		         <img class='foto' src="<?= 'admin/gambar_db/'.$product['gambar']?>">
			</div>
		    <label>Nama Produk</label>
			<input type='text' name='nama' readonly value=<?= $product['nama'];?>>
			   <div class='garis'></div>
			 <label>Harga</label>
			 <input type='text' name='harga' readonly value="Rp. <?=$product['harga'];?>">
			   <br />
			     <br />
			 <label>Nama anda</label>
			 <input type='text' name='nama_pembeli' class='nama-pembeli'>
			 <br />
			 <label>No Telepon</label>
			 <input type='text' name='no-handphone' class='no-ponsel'>
			 <center><label>Alamat</label></center>
			 <textarea name='alamat'></textarea>
			 
			 <input type='text' value='' name='pembayaran-yang-dipilih' id='pembayaran'>
			 
			 <!-------Metode Pembayaran------->
			 
<?php
   $metod = mysqli_query($mysqli, "SELECT * FROM metode_pembayaran");
   
   while($bayar = mysqli_fetch_array($metod)) {
?>			 

			 <div class='pembayaran-wrapper'>
			      <div onclick='<?php  echo $bayar['metode']; echo $bayar['id'];?>()'>
				     <div class='metode-nya'><?php echo $bayar['metode']; ?></div>
				  </div>
			 <script>
			     function <?php echo $bayar['metode']; echo $bayar['id'];?>() {
					 document.getElementById('kode-disini').value = "<?= $bayar['kode'];?>";
					 document.getElementById('pembayaran').value = "<?= $bayar['metode'];?>";
				 }
			 </script>
			 </div>
   <?php } ?>
			 
			 
			   <br />
			      <div class='teks'>
			          <a>Kode Pembayaran</a>
					    </div>
			   <input type="text" class='kode-pembayaran' readonly id='kode-disini'>
			 
			  <center>
			 <button type='submit' name='beli'>Pesan sekarang</button>
			 </center>
		</div>
	   </form>
   </body>
</html>