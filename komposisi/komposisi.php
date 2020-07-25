<?php include '../session.php'?>
<!DOCTYPE html>
<html>
<head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">    
    	<link rel="stylesheet" href="../css/home.css">
    	<!-- Data table -->
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/fh-3.1.6/r-2.2.3/sp-1.0.1/datatables.min.css"/>
    	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/fh-3.1.6/r-2.2.3/sp-1.0.1/datatables.min.js"></script>
    <title>List Komposisi - Marici</title>
</head>
<body>
<?php include 'navbar_komposisi.php'; ?>       
<h2 style="text-align: center; margin-top: 5px;">List Komposisi</h2>
<hr>
<br>
    <?php
    include '../connect.php';
    $list_bahan = mysqli_query($koneksi, "SELECT * from bahan");
    $no = 1;
 ?>
    <div class="container" style="text-align: center;">
      <div class="mx-2">
  <table class="table table-bordered table-striped  table-hover table-light"  id="tabel-data">
    <thead class="thead-dark">
  
        <tr>
        	<th>No</th>
            <th>Data Produk (Kode Barang)</th>
            <th>Data Produk (No Brg)</th>
            <th>Data Bahan (Kode Bahan)</th>
            <th>Data Bahan (No Bhn)</th>
            <th>Data Bahan (Warna)</th>
            <th>Elemen Produk (Jumlah (pcs))</th>
            <th>Elemen Produk (Panjang (mm))</th>
            <th>Elemen Produk (Keterangan)</th>
            <th>Settings</th>
        </tr>
    </thead>
    <tbody>
    <?php
       
        $list_barang = mysqli_query($koneksi, "SELECT a.id, a.kode_brg, a.kode_bhn, a.jumlah, a.panjang, a.ket, b.produk_brg, c.produk_bhn, c.warna_bhn FROM komposisi AS a LEFT JOIN barang AS b ON a.kode_brg = b.kode_brg LEFT JOIN bahan as c ON a.kode_bhn = c.kode_bhn ORDER BY kode_brg");
        
        while($row = mysqli_fetch_array($list_barang))
        {
            echo "<tr>
            <td>$no</td>
            <td>".$row['kode_brg']."</td>
            <td>".$row['produk_brg']."</td>
            <td>".$row['kode_bhn']."</td>
            <td>".$row['produk_bhn']."</td>
            <td>".$row['warna_bhn']."</td>
            <td>".$row['jumlah']."</td>
            <td>".$row['panjang']."</td>
            <td>".$row['ket']."</td>
            <td><a href='update_komposisi.php?id=".$row['id']."'><button class='btn btn-primary'>Edit</button></a>
            <a href='delete_komposisi.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a>
            </td>
          </tr>";
        $no++;
        }
    ?>
    </tbody>
</table>
<div class="container">
        <div class="row">
            <div class="col col-md-4">
            </div>
            <div class="col col-md-4">
                <form action="../barang.php" method="post" class="form-signin">
                <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit">Back</button>
                </form>
            </div>
            <div class="col col-md-4">
            </div>
        </div>
    </div>
    </div>

    <br>
</div>
<script>
$(document).ready(function(){
  $('#tabel-data').DataTable({
  	rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
  });
  
  
});

</script>


</body>
</html>