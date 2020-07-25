<?php
include '../connect.php';
// menyimpan data id kedalam variabel
$kode_bhn   = $_GET['kode_bhn'];
// query SQL untuk insert data
$query="DELETE FROM bahan WHERE kode_bhn='$kode_bhn'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: list_bahan.php");
?>