<?php
include '../connect.php';
 include '../session.php';
// menyimpan data kedalam variabel
$tipe_brg = $_POST['tipe_brg'];
$dimensi_brg = $_POST['dimensi_brg'];
$motif_brg = $_POST['motif_brg'];
$warna_brg = $_POST['warna_brg'];
$produk_brg = $_POST['produk_brg'];
$nama_brg = $_POST['nama_brg'];
$stok_brg = $_POST['stok_brg'];
$gbr = $_POST['gbr'];
$kode_brg = $tipe_brg."_".$dimensi_brg."_".$motif_brg."_".$warna_brg."_".$produk_brg;

//mengecek ada kode bahan yang sama
$checkkode = "SELECT COUNT(*) from barang where kode_brg = '$kode_brg' ";
$result = mysqli_query($koneksi,$checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO barang VALUES (DEFAULT, '$kode_brg', '$tipe_brg', '$dimensi_brg', '$motif_brg', '$warna_brg', '$produk_brg', '$nama_brg', '$stok_brg', '$gbr')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Data barang berhasil masuk')
				window.location.replace('tambah_barang.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Kode barang sudah terpakai')
		window.location.replace('tambah_barang.php');
		</script>";
			
	
	}


?>