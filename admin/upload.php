<?php 
include 'db.php';
	   
session_start();
if(!$_SESSION['login']) {
	header("location: login.php");
}
	   
   if(isset($_POST['upload'])) {
	   $gambar = $_FILES['gambar']['name'];
	   $ukuran = $_FILES['gambar']['size'];
	   $error = $_FILES['gambar']['error'];
	   $file_tmp = $_FILES['gambar']['tmp_name'];
	   
	   $nama_produk = $_POST['nama_produk'];
	   $harga_produk = $_POST['harga_produk'];
	   $deskripsi = $_POST['deskripsi'];
	   
	  if( $error === 4) {
		  echo "<script>
		           alert('Pilih gambar terlebih dahulu');
				</script>";
			return false;
	  }
	  
	  if (empty($nama_produk)) {
		   echo "<script>
		           alert('Nama produk kosong');
				</script>";
		  return false;
	  }
	  
	  if (empty($harga_produk)) {
		   echo "<script>
		           alert('Harga produk kosong');
				</script>";
		  return false;
	  }
	  
	  $ekstensigambarvalid = ['jpg','png','jpeg'];
	  $ekstensigambar = explode('.', $gambar);
	  $ekstensigambar = strtolower(end($ekstensigambar));
	  if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
		   echo "<script>
		           alert('Ekstensi gambar tidak valid');
				</script>";
			return false;
	  }
	  
	  if($ukuran > 3000000) {
		  echo "<script>
		           alert('Ukuran gambar terlalu besar');
				</script>";
			return false;
	  }
		  
	$namagambarbaru = uniqid();
	$namagambarbaru.= ".";
    $namagambarbaru.= $ekstensigambar;	
	  
	  move_uploaded_file($file_tmp, 'gambar_db/'.$namagambarbaru);

	  
	  $result = mysqli_query($mysqli, "INSERT INTO product(gambar,nama,deskripsi,harga) VALUES('$namagambarbaru','$nama_produk','$deskripsi','$harga_produk')");
      if($result) {
		  echo '<script>
		       alert("produk berhasil di upload");
		  </script>';
	  } else {
		  echo '<script>
		       alert("produk gagal di upload");
		  </script>';
	  }
}
	  
   
?>


<html>
<head>
    <title>Upload Produk</title>
	<meta name='viewport' content="width-device-width, initial-scale=1.1">
	<link rel='stylesheet' href='upload.css'>
</head>
<body>
        <div class='header'>
		    <a>TokoKu</a>
		</div>

<div class='wrapper' align='center'>
  <h2>Upload produk</h2>
  <p>
  Silahkan upload produk mu sebagai test<br />
  Produk mu akan tetap ada!!
  </p>
  <br />
   <form action='' method='post' enctype='multipart/form-data'>
        <b>Thumbnail</b>
         <input type='file' id='foto' name='gambar' />
		   <br />
         <input type='text' placeholder='nama produk' name='nama_produk' value=''/>
		   <br />
		 <input type='number' placeholder='harga' name='harga_produk' value=''/>
		   <br />
		  <a>Deskripsi Produk</a>
		    <br />
		 <textarea name='deskripsi'></textarea>
		   <br />
		     <br />
		 <button type='submit' name='upload'>Upload</button>
   </form>
</div>
</body>
</html>