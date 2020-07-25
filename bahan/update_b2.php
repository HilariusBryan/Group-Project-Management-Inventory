<?php
include '../connect.php';
// menyimpan data kedalam variabel
$id_bhn   = $_POST['id_bhn'];
$tipe_bhn = $_POST['tipe_bhn'];
$dimensi_bhn = $_POST['dimensi_bhn'];
$motif_bhn = $_POST['motif_bhn'];
$warna_bhn = $_POST['warna_bhn'];
$produk_bhn = $_POST['produk_bhn'];
$nama_bhn = $_POST['nama_bhn'];
$stok_bhn = $_POST['stok_bhn'];
$satuan = $_POST['satuan'];
$gbr = $_POST['gbr'];
$kode_bhn = $tipe_bhn."_".$dimensi_bhn."_".$motif_bhn."_".$warna_bhn."_".$produk_bhn;
// query SQL untuk insert data
$query="UPDATE bahan SET kode_bhn='$kode_bhn', tipe_bhn='$tipe_bhn', dimensi_bhn='$dimensi_bhn', motif_bhn='$motif_bhn', warna_bhn='$warna_bhn', produk_bhn='$produk_bhn', nama_bhn='$nama_bhn', stok_bhn='$stok_bhn', satuan_bhn='$satuan', gbr='$gbr' WHERE id='$id_bhn'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("Location: list_bahan.php");
?>