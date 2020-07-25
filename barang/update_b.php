<?php
include 'connect.php';
// menyimpan data kedalam variabel
$id_brg   = $_POST['id_brg'];
$kode_brg = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$stok_brg = $_POST['stok_brg'];
$gbr = $_POST['gbr'];
// query SQL untuk insert data
$query="UPDATE barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', stok_brg='$stok_brg', gbr='$gbr' WHERE id='$id_brg'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("Location: list_barang.php");
?>