<?php 
$db = mysqli_connect("localhost", "root", "", "tugas6");

function query ($query){
	global $db;
	$result = mysqli_query( $db, $query );
	$rows = [];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data){
	global $db;
	$kode = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "INSERT INTO barang VALUES ('$kode','$nama','$jumlah','$harga')";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
 }

  function ubah($data, $id){
 	global $db;
 	$kode = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$harga = htmlspecialchars($data["harga"]);


 	$query = "UPDATE barang SET barang_kode = '$kode', barang_nama = '$nama', barang_jumlah =$jumlah, barang_harga = $harga WHERE barang_kode ='$id'";


 	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
 }

  function hapus ($id){

 	global $db;
 	$query = "DELETE FROM barang WHERE barang_kode='$id'";
 	mysqli_query($db, $query);
 	return mysqli_affected_rows($db);
 }


 ?>