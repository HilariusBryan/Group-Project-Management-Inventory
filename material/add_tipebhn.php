<?php 
include '../connect.php';
// menyimpan data kedalam variabel
$tipe_bhn = $_POST['tipe_bhn'];
$ket = $_POST['ket'];

$checkkode = "SELECT COUNT(*) from tipebahan where tipe_bahan = '$tipe_bhn' ";
$result = mysqli_query($koneksi, $checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO tipebahan VALUES (DEFAULT, '$tipe_bhn', '$ket')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Tipe bahan berhasil masuk')
				window.location.replace('tipe_bahan.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Tipe bahan sudah terpakai')
		window.location.replace('tipe_bahan.php');
		</script>";
			
	
	}

 ?>