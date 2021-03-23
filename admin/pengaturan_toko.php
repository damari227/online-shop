<?php
    session_start();
	
	if(!$_SESSION['login']) {
		header("location: login.php");
	}
	
	include 'db.php';

$result1 = mysqli_query($mysqli, "SELECT * FROM metode_pembayaran");


?>
<html>
     <title>Pengaturan Toko</title>
     <link rel='stylesheet' href='pengaturan_toko.css'>

<div class='header'>
    <a>Pengaturan Toko</a>
	<a href='index.php' class='keluar'><button>Keluar</button></a>
</div>

<div class='container'>
<div class='tambah-metode'>
<div class='form-group'>
   <h3>Tambah Metode</h3>
<br />   
    <form action='aksi.php' method='post'>
<label>Nama Metode</label>
    <br />
         <input name='metode' type='text'>
<br />
<label>Kode Pembayaran</label>
   <br />
         <input type='text' name='kode'>
<br />
<label>Nama Pemilik</label>
   <br />
		 <input type='text' name='nama-admin'>
<br />
         <button type='submit' name='tambahkan'>Tambahkan</button>
   </form>
   <br />
 <a href='produk.php'>Produk</a>
</div>
</div>



<div class='content-wrapper'>
 <?php
while($metode=mysqli_fetch_array($result1)) {  
?>

    <div class='metode-wrapper'>
      <div class='mtd1'>
          <a><?=$metode['metode'];?></a>
	           </div>
	              <div class='metod'>
	                  <div class='mtd'>
	                <a class='nama-row'>Kode pembayaran</a>
                    <div class='garis'></div>
                    <a><?=$metode['kode'];?></a>
	             </div>
				 
	                 <div class='mtd'>
	           <a class='nama-row'>Nama pemilik</a>
                  <div class='garis'></div>
                     <a><?=$metode['nama'];?></a>
	             </div>
	           </div>
		     <div class='aksi'>
			      <a  href='pengaturan.php?id=<?=$metode['id'];?>'>
	                    <button>Edit Metode</button>
				 </a>
				 <a href='hapus_mtd.php?id=<?=$metode['id'];?>'>
	                    <button>Hapus Metode</button>
				</a>
	    </div>
</div>

<?php } ?>
</div>
</div>
</html>