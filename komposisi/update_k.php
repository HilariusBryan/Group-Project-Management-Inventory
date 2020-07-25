<?php
include '../connect.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$kode_brg = $_POST['kode_brg'];
$kode_bhn = $_POST['kode_bhn'];
$panjang = $_POST['panjang'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['ket'];
// query SQL untuk insert data
$query="UPDATE barang SET kode_brg='$kode_brg', kode_bhn='$kode_bhn', jumlah='$jumlah', panjang='$panjang', ket='$ket' WHERE id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("Location: komposisi.php");
?>