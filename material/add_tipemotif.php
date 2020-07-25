<?php 
include '../connect.php';
// menyimpan data kedalam variabel
$tipe_motif = $_POST['tipe_motif'];
$ket = $_POST['ket'];

$checkkode = "SELECT COUNT(*) from tipemotif where tipe_motif = '$tipe_motif' ";
$result = mysqli_query($koneksi, $checkkode);
$row = mysqli_fetch_assoc($result);
if ($row['COUNT(*)'] == 0)
	{
		// query SQL untuk insert data
		$query="INSERT INTO tipemotif VALUES (DEFAULT, '$tipe_motif', '$ket')";
		mysqli_query($koneksi, $query);
		echo "Records added successfully.";
		echo "<script>
				alert('Tipe motif berhasil masuk')
				window.location.replace('tipe_motif.php');
    		  </script>";


    	
	}
	
else
	{
		echo "<script>
		alert('Tipe motif sudah terpakai')
		window.location.replace('tipe_motif.php');
		</script>";
			
	
	}

 ?>