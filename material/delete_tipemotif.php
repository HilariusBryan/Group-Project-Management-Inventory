<?php
include '../connect.php';
// menyimpan data id kedalam variabel
$tipe_motif   = $_GET['tipe_motif'];
// query SQL untuk insert data
$query="DELETE FROM tipemotif WHERE tipe_motif='$tipe_motif'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman
header("Location: tipe_motif.php");
?>