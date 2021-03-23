<?php
session_start();

if(isset($_POST['masuk'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	include 'db.php';
	
	$user = stripcslashes($user);
	$pass = stripcslashes($pass);
	
	
	$query = mysqli_query($mysqli, "SELECT * FROM account WHERE username='$user' AND password='$pass'");
	$rows = mysqli_num_rows($query);
	if($rows > 0) {
		$_SESSION['login']=$user;
		header("location: index.php");
	}
}

?>
<html>
   <head>
      <title>Masuk sebagai Admin</title>
	  <meta name='viewport' content="width-device-width, initial-scale=1.1">
	  <link rel='stylesheet' href='login.css'>
   </head>
   <body>
   <div class='header'>
		    <a>TokoKu</a>
		</div>
    <center>
      <b>Masuk sebagai Admin</b>
	  <div class='garis-bawah'></div>
	</center>
   
       <form action='' method='post'>
	        <input type='text' name='username' placeholder='username' class='input'/>
	<br />
	        <input type='password' name='password' placeholder='password' class='input'/>
    <br />
            <button type='submit' name='masuk'>Masuk</button>
	   </form>
	   <p>
	    untuk masuk kehalaman admin masukan<br />
		username : zacky<br />
		password : 123<br />
	   </p>
   </body>
</htmL>