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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/fh-3.1.6/r-2.2.3/sp-1.0.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fc-3.3.0/fh-3.1.6/r-2.2.3/sp-1.0.1/datatables.min.js"></script>
 
    <title>Kode Bahan - Marici</title>
   </head>
<body>
<?php include 'navbar_material.php'; ?>       
<h2 style="text-align: center; margin-top: 5px;">List Kode Bahan</h2>
<hr>
<div class="container">
 <div class="row">

    <div class="col-sm-4 col-md-4 mx-auto">   
        <form action="add_tipebhn.php" method="POST">
                <h4>Add Kode Bahan</h4>
            <input class="form-control"  type="text" placeholder="Kode Bahan" name="tipe_bhn">
            <br> 
            <input class="form-control"  type="text" placeholder="Keterangan" name="ket">
            <br>
            <button class="btn btn-warning text-uppercase" type="submit" value="simpan">Tambah</button>
        </form>
    </div>
</div>
</div>

<br>
    <?php
    include '../connect.php';
  
    $list = mysqli_query($koneksi, "SELECT * from tipebahan");
    $no = 1;
    $chek = mysqli_num_rows($list);

 ?>
    <div class="container" style="text-align: center;">
      <div class="mx-2">
      <table class="table table-bordered table-striped  table-hover table-light"  id="tabel-data">
    <thead class="thead-dark">
        <tr>
            <th>No.</th>
            <th>Kode Bahan</th>
            <th>Keterangan</th>
            <th>Setting</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
        include '../connect.php';
        $list = mysqli_query($koneksi, "SELECT * from tipebahan");
        while($row = mysqli_fetch_array($list))
        {
            echo "<tr>
            <td>$no</td>
            <td>".$row['tipe_bahan']."</td>
            <td>".$row['ket']."</td>
            <td scope='col'>
            <a href='delete_tipebahan.php?tipe_bahan=".$row['tipe_bahan']."'><button class='btn btn-danger'>Delete</button></a></td>
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
  $('#tabel-data').DataTable();
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>