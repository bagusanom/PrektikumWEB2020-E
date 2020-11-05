<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>	
<body id="bg-login">
	<div class="box-login">
		<h2>Pendaftaran</h2>
		<form action="" method ="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="text" name="nama" placeholder="Nama" class="input-control">
			<input type="text" name="telp" placeholder="Telepon" class="input-control">
			<input type="email" name="email" placeholder="Email" class="input-control">
			<input type="Password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="daftar" value="Daftar" class="btndaftar">
		</form>
		
		<?php
			if(isset($_POST['daftar']))
		{
				include 'connect.php';
			$insert= mysqli_query($conn, "INSERT INTO tb_daftar VALUES
				( 
				'".$_POST['user']."', 
				'".$_POST['nama']."', 
				'".$_POST['telp']."', 
				'".$_POST['email']."', 
				'".$_POST['pass']. "')");
			if($insert){
				header('location:login.php');
			}else {
				echo 'gagal daftar';
			}
		}
			?>
</body>
</html>