<?php
include '../connect.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE FROM komposisi WHERE id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: komposisi.php");
?>