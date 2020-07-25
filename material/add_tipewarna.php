<?php 
include '../connect.php';
// menyimpan data kedalam variabel
$tipe_warna = $_POST['tipe_warna'];
$ket = $_POST['ket'];

$checkkode = "SELECT COUNT(*) from tipewarna where tipe_warna = '$tipe_warna' ";
$result = mysqli_query($koneksi, $checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO tipewarna VALUES (DEFAULT, '$tipe_warna', '$ket')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Tipe warna berhasil masuk')
				window.location.replace('tipe_warna.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Tipe warna sudah terpakai')
		window.location.replace('tipe_warna.php');
		</script>";
			
	
	}


 ?>