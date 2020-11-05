<?php
include 'connect.php';
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}
$query=mysqli_query($conn,"SELECT * FROM tb_daftar WHERE username = '".$_SESSION['id']."' ");
$d=mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shoes Saurus</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>	
<body>
    <!--header-->
    <header>
    <div class ="container">
        <h1><a href="dashboard.php">Shoes Saurus</a></h1>
        <ul>
            <li><a href="dashboard.php" >Dashboard</a></li>
            <li><a href="profil.php" >Profile</a></li>
            <li><a href="data-kategori.php" >Data Kategori</a></li>
            <li><a href="data-produk.php" >Data Produk</a></li>
            <li><a href="login.php" >Logout</a></li>
        </ul>
    </div>
    </header>
    <!--content-->
    <div class="section">
        <div class="container">
            <h3>Profile</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d> nama ?>" required>
                    <input type="text" name="telepon" placeholder="Telepon" class="input-control" required>
                    <input type="text" name="email" placeholder="Email" class="input-control" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn" >

                </form>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2020 - Shoes Saurus.</small>
        </div>
    </footer>
</body>
</html>