<!DOCTYPE html>
<html>
<head>
	 <!-- Favicons -->
	 <link href="assets/img/team/okkkkkk.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<title>Login-SMK BCC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1> <br/></h1>

	<?php 
	if(isset($_GET['pw'])){
		if($_GET['pw']=="gagal"){
			echo "<div class='alert'>Username dan Passworrd Salah</div>";
		}
	}
	?>
	
	<div class="kotak_login">
	<center><img src="assets/img/team/okkkkkk.png" style="width:100px;height:100px;" alt=""><center>
		<h3 class="tulisan_login">Silahkan login</h3>
 
		<form action="cek_login.php" method="post">
			<label></label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="Username">
 
			<label></label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="Password">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>