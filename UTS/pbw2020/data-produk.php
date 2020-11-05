<?php
include 'connect.php';
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}
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
            
            <li><a href="data-kategori.php" >Data Kategori</a></li>
            <li><a href="data-produk.php" >Data Produk</a></li>
            <li><a href="login.php" >Logout</a></li>
        </ul>
    </div>
    </header>
    <!--content-->
    <div class="section">
        <div class="container">
            <h3>Data Produk</h3>
            <div class="box">
                <p><a href="tambah-produk.php">Tambah Data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width ="60px">No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        
                            $produk= mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
                            if(mysqli_num_rows($produk)>0){
                            while($row = mysqli_fetch_array($produk)){
                                    
                        ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $row['category_name'] ?></td>
                            <td><?php echo $row['product_name'] ?></td>
                            <td>Rp. <?php echo number_format($row['product_price']) ?></td>
                            <td><?php echo $row['product_description'] ?></td>
                            <td><img src="produk/<?php echo $row['product_image']?>"width="50px"></td>
                            <td><?php echo $row['product_status'] == 0? 'Tidak Aktif' : 'Aktif'?></td>
                           
                        </tr>
                            <?php } }else{ ?>
                                 <tr>
                                    <td colspan="8">Tidak Ada Data</td>
                                 </tr>   
                           <?php } ?>

                    </tbody>
                </table>
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