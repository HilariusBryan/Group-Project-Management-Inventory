<?php
include '../connect.php';
include '../session.php';
// menyimpan data id kedalam variabel
$kode_brg   = $_GET['kode_brg'];
// query SQL untuk insert data
$query="DELETE FROM barang WHERE kode_brg='$kode_brg'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: list_barang.php");
?>