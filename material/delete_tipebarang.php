<?php
include '../connect.php';
// menyimpan data id kedalam variabel
$tipe_barang   = $_GET['tipe_barang'];
// query SQL untuk insert data
$query="DELETE FROM tipebarang WHERE tipe_barang='$tipe_barang'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: tipe_barang.php");
?>