<?php
include '../connect.php';
// menyimpan data kedalam variabel
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
//mengecek ada kode bahan yang sama
$checkkode = "SELECT COUNT(*) from bahan where kode_bhn = '$kode_bhn' ";
$result = mysqli_query($koneksi,$checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO bahan VALUES (DEFAULT, '$kode_bhn', '$tipe_bhn', '$dimensi_bhn', '$motif_bhn', '$warna_bhn', '$produk_bhn', '$nama_bhn', '$stok_bhn', '$satuan', '$gbr')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Data bahan berhasil masuk')
				window.location.replace('tambah_bahan.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Kode bahan sudah terpakai')
		window.location.replace('tambah_bahan.php');
		</script>";
			
	
	}


?>