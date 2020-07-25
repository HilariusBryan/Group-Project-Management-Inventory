<?php include 'session.php'?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css/home.css">
     <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
       <!--  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <title>Kode Motif - Marici</title>
    <style type="text/css">
        body{
            font-family: 'Roboto', sans-serif;
          }
    </style>
</head>
<body>
<?php include 'navbar.php'; 
?>       
<h2 style="text-align: center; margin-top: 5px;">List Kode Warna</h2>
<hr>
<div class="container">
<div class="row">
    <div class="col-sm-4 col-md-4 mx-auto">   
        <form action="tipe_motif.php" method="GET">
                <h4>Cari Kode Motif</h4>
            <input class="form-control" id="myInput" type="text" placeholder="Cari kode">
        </form>
    </div>
    <div class="col-sm-4 col-md-4 mx-auto">   
        <form action="add_tipemotif.php" method="POST">
                <h4>Add Kode Motif</h4>
            <input class="form-control" id="myInput" type="text" placeholder="Kode Motif" name="tipe_motif">
            <br> 
            <input class="form-control" id="myInput" type="text" placeholder="Keterangan" name="ket">
            <br>
            <button class="btn btn-warning text-uppercase" type="submit" value="simpan">Tambah</button>
        </form>
    </div>
</div>
</div>

<br>
    <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";
        }
    ?>
    <?php
    include 'connect.php';
    // $halperpage = 10;
    // $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    // $mulai = ($page>1) > ($page *halperpage)- $halperpage: 0;
    $list = mysqli_query($koneksi, "SELECT * from tipemotif");
    $no = 1;
    $chek = mysqli_num_rows($list);
    // $pages = ceil($total/$halperpage);
    // $pagination = mysqli_query("SELECT * from tipemotif, $halperpage");

    if($chek>0)
    { ?>
    <div class="container">
      <div class="mx-2">
        <table class="table table-bordered table-striped  table-hover table-info" border="0" align="center" id="example">
            <tr class = "table-light">
                <thead class ="thead-light" align="center">
                    <th>No.</th>
                    <th scope="col">Kode Motif</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Settings</th>
                </thead>
                <tbody id="myTable" align="center">
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $list_cari = mysqli_query($koneksi, "SELECT * from tipemotif WHERE tipe_motif like '%".$cari."%'");
        $chek_cari = mysqli_num_rows($list_cari);
        if($chek_cari>0){
            foreach ($list_cari as $row){
            echo "<tr>
            <td>$no</td>
            <td scope='col'>".$row['tipe_motif']."</td>
            <td scope='col'>".$row['ket']."</td>
            <td scope='col'>
            <a href='delete_barang.php?tipe_motif=$row[tipe_motif]'><button class='btn btn-danger'>Delete</button></a>
            </td>
              </tr>";
              $no++;
        }
        ?>

    </tbody>
    </tr>
    </table>
    </div>
    <?php
        }else{
          echo "Tidak ada kode motif";
        }
        ?>
    <br>
    <form method="post" action="tipe_motif.php">
    <button type="submit" value="back">BACK to Full List</button>
    </form>
    <?php
    }else{
    foreach ($list as $row){
        echo "<tr>
            <td>$no</td>
            <td scope='col'>".$row['tipe_motif']."</td>
            <td scope='col'>".$row['ket']."</td>
            <td scope='col'>
            <a href='delete_tipemotif.php?tipe_motif=$row[tipe_motif]'><button class='btn btn-danger'>Delete</button></a>
            </td>
              </tr>";
              $no++;
    }
    ?>
    </table>
     <div>
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
        <a class="btn btn-info btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
      </div> 
</div>
    <?php }}else
    {
    echo "Tidak ada kode motif";
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
            </div>
            <div class="col col-md-4">
                <form action="barang.php" method="post" class="form-signin">
                <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit">Back</button>
                </form>
            </div>
            <div class="col col-md-4">
            </div>
        </div>
    </div>
<script>
$(document).ready(function(){
  $('#example').DataTable();
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