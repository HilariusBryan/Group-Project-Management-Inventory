<?php include '../session.php'?>
<!DOCTYPE html>
<html>
<head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/fh-3.1.6/r-2.2.3/sp-1.0.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/fh-3.1.6/r-2.2.3/sp-1.0.1/datatables.min.js"></script>
        <title>List Barang - Marici</title>
  
</head>
<body>
<?php include 'navbar_barang.php'; ?>       
<h2 style="text-align: center; margin-top: 5px;">List Barang</h2>
<hr>
<br>


    <?php
    include '../connect.php';
  
    $list = mysqli_query($koneksi, "SELECT * from barang");
    $no = 1;
    $chek = mysqli_num_rows($list);

 ?>
    <div class="container" style="text-align: center;">
      <div class="mx-2">
      <table class="table table-bordered table-striped  table-hover table-light"  id="tabel-data">
    <thead class="thead-dark">
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Tipe</th>
            <th>Dimensi</th>
            <th>Motif</th>
            <th>Warna</th>
            <th>Produk</th>
            <th>Ket. Barang</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Settings</th>
        </tr>
    </thead>
    <tbody>
    <?php
       
        $list = mysqli_query($koneksi, "SELECT * from barang");
        while($row = mysqli_fetch_array($list))
        {
            echo "<tr>
            <td>$no</td>
            <td>".$row['kode_brg']."</td>
            <td>".$row['tipe_brg']."</td>
            <td>".$row['dimensi_brg']."</td>
            <td>".$row['motif_brg']."</td>
            <td>".$row['warna_brg']."</td>
            <td>".$row['produk_brg']."</td>
            <td>".$row['nama_brg']."</td>
            <td>".$row['stok_brg']."</td>
            <td><a href=".$row['gbr'].">".$row['gbr']."</a></td>
            <td><a href='update_barang.php?kode_brg=".$row['kode_brg']."'><button class='btn btn-primary'>Edit</button></a>
            <a href='delete_barang.php?kode_brg=".$row['kode_brg']."'><button class='btn btn-danger'>Delete</button></a>
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