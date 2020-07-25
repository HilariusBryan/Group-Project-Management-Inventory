<?php
include '../connect.php';
// menyimpan data id kedalam variabel
$tipe_warna   = $_GET['tipe_warna'];
// query SQL untuk insert data
$query="DELETE FROM tipewarna WHERE tipe_warna='$tipe_warna'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: tipe_warna.php");
?>