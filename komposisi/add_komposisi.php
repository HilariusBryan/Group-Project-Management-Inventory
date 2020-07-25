<?php
include '../connect.php';
// menyimpan data kedalam variabel
$kode_brg = $_POST['kode_brg'];
$kode_bhn = $_POST['kode_bhn'];
$ket = $_POST['ket'];
$jumlah_bhn = $_POST['jumlah_bhn'];
$panjang_bhn = $_POST['panjang_bhn'];

//mengecek ada kode bahan yang sama
$checkkode = "SELECT COUNT(*) from komposisi where (kode_brg = '$kode_brg' AND kode_bhn = '$kode_bhn')";
$result = mysqli_query($koneksi,$checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO komposisi VALUES (DEFAULT, '$kode_brg', '$kode_bhn', '$panjang_bhn', '$jumlah_bhn', '$ket')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Komposisi berhasil ditambahkan')
				window.location.replace('tambah_komposisi.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Bahan sudah pernah ditambahan sebelumnya')
		window.location.replace('tambah_komposisi.php');
		</script>";
			
	
	}


?>