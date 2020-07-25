<?php 
include '../connect.php';
// menyimpan data kedalam variabel
$tipe_brg = $_POST['tipe_brg'];
$ket = $_POST['ket'];

$checkkode = "SELECT COUNT(*) from tipebarang where tipe_barang = '$tipe_brg' ";
$result = mysqli_query($koneksi, $checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO tipebarang VALUES (DEFAULT, '$tipe_brg', '$ket')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Tipe barang berhasil masuk')
				window.location.replace('tipe_barang.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Tipe barang sudah terpakai')
		window.location.replace('tipe_barang.php');
		</script>";
			
	
	}

 ?>