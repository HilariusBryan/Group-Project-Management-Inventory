<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$tipe_bahan   = $_GET['tipe_bahan'];
// query SQL untuk insert data
$query="DELETE FROM tipebahan WHERE tipe_bahan='$tipe_bahan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: tipe_bahan.php");
?>