<?php include 'session.php'?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <title>Home - Marici Database</title>
        <style type="text/css">
          body{
            font-family: 'Roboto', sans-serif;
          }
        </style>
    </head>
    <body>
  <?php include 'navbar.php'; ?>   
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <h3 class="card-title text-center">Barang</h3>
            <form method="post" action="barang/tambah_barang.php">
                <button class = "btn btn-lg btn-primary btn-block text-uppercase" type="submit">Add Barang</button>
            </form>
            <br>
            <form method="post" action="barang/list_barang.php">
                <button class = "btn btn-lg btn-primary btn-block text-uppercase" type="submit" >List Barang</button>
            </form> 
          </div>
        </div>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <h3 class="card-title text-center">Bahan</h3>
            <form method="post" action="bahan/tambah_bahan.php">
                <button class = "btn btn-lg btn-info btn-block text-uppercase" type="submit">Add Bahan</button>
            </form>
            <br>
            <form method="post" action="bahan/list_bahan.php">
                <button class = "btn btn-lg btn-info btn-block text-uppercase" type="submit" >List Bahan</button>
            </form> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <h3 class="card-title text-center">Komposisi</h3>
            <form method="post" action="komposisi/tambah_komposisi.php">
                <button class = "btn btn-lg btn-warning btn-block text-uppercase" type="submit">Add Komposisi</button>
            </form>
            <br>
            <form method="post" action="komposisi/komposisi.php">
                <button class = "btn btn-lg btn-warning btn-block text-uppercase" type="submit">List Komposisi</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <h3 class="card-title text-center">Raw Material</h3>
            <form method="post" action="material/tipe_barang.php">
                <button class = "btn btn-lg btn-warning btn-block text-uppercase" type="submit">Kode Barang</button>
            </form>
            <br>
            <form method="post" action="material/tipe_bahan.php">
                <button class = "btn btn-lg btn-warning btn-block text-uppercase" type="submit">Kode Bahan</button>
            </form>
            <br>
            <form method="post" action="material/tipe_motif.php">
                <button class = "btn btn-lg btn-warning btn-block text-uppercase" type="submit">Kode Motif</button>
            </form>
            <br>
            <form method="post" action="material/tipe_warna.php">
                <button class = "btn btn-lg btn-warning btn-block text-uppercase" type="submit">Kode Warna</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    </body>
</html>