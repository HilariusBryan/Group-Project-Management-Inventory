<?php include '../session.php'?>
<!DOCTYPE html>

<html>

    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
		    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
		    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <title>Input BAHAN - Marici</title>
        <style type="text/css">
          body{
            font-family: 'Roboto', sans-serif;
          }
        </style>
    </head>

    <body>
  <?php include 'navbar_bahan.php'; 
  include '../connect.php';
  ?>  

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Tambah bahan baru</h5>
            <form action="add_bahan.php" method="post" class="form-signin">


              <div class="form-group">
              <label for="tipe_bhn">Tipe Bahan</label>
              <select class="form-control js-example-basic-single" id="tipe_bhn" name="tipe_bhn">
                <option>--Pilih--</option>
              <?php 
              $query="SELECT * FROM tipebahan";
              $tipe_results = mysqli_query($koneksi, $query);
              $tipe_options = "";

              while($row_tipe = mysqli_fetch_array($tipe_results))
              {
                $tipe_options = $tipe_options."<option value=".$row_tipe[1].">$row_tipe[1] - $row_tipe[2]</option>";
              }
              echo $tipe_options; ?>
              </select>
              </div>

              <div class="form-label-group">
                <input type="name" id="dimensi_bhn" class="form-control" placeholder="Dimensi Bahan" name="dimensi_bhn"required autofocus>
                <label for="dimensi_bhn">Dimensi Bahan</label>
              </div>

              <div class="form-group">
              <label for="tipe_motif">Motif Bahan</label>
              <select class="form-control js-example-basic-single" id="motif_bhn" name="motif_bhn">
                <option>--Pilih--</option>
              <?php 
              $query="SELECT * FROM tipemotif";
              $motif_results = mysqli_query($koneksi, $query);
              $motif_options = "";

              while($row_motif = mysqli_fetch_array($motif_results))
              {
                $motif_options = $motif_options."<option value=".$row_motif[1].">$row_motif[1] - $row_motif[2]</option>";
              }
              echo $motif_options; ?>
              </select>
              </div>

              <div class="form-group">
              <label for="tipe_warna">Warna Bahan</label>
              <select class="form-control js-example-basic-single" id="warna_bhn" name="warna_bhn">
                <option>--Pilih--</option>
              <?php 
              $query="SELECT * FROM tipewarna";
              $warna_results = mysqli_query($koneksi, $query);
              $warna_options = "";

              while($row_warna = mysqli_fetch_array($warna_results))
              {
                $warna_options = $warna_options."<option value=".$row_warna[1].">$row_warna[1] - $row_warna[2]</option>";
              }
              echo $warna_options; ?>
              </select>
              </div>

              <div class="form-label-group">
                <input type="name" id="produk_bhn" class="form-control" placeholder="Produk Bahan" name="produk_bhn"required autofocus>
                <label for="produk_bhn">Produk</label>
              </div>

               <div class="form-label-group">
                <input type="name" id="inputbarang" class="form-control" placeholder="Nama Barang" name="nama_bhn"required autofocus>
                <label for="inputbarang">Nama Bahan</label>
              </div>

               <div class="form-label-group">
                <input type="number" id="inputstok" class="form-control" placeholder="Jumlah Stok" name="stok_bhn"required autofocus>
                <label for="inputstok">Jumlah Stok</label>
              </div>     

              <div class="form-label-group">
                <input type="name" id="inputsatuan" class="form-control" placeholder="Jumlah Stok" name="satuan"required autofocus>
                <label for="inputsatuan">Satuan Bahan</label>
              </div>

              <div class="form-label-group">
                <input type="name" id="inputgbr" class="form-control" placeholder="Gambar (Link IG)" name="gbr"required autofocus>
                <label for="inputgbr">Gambar (Link IG)</label>
              </div>          

              <hr cselass="my-4">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="simpan">Tambah</button>
              </form><br>
              <form action="../barang.php" method="post" class="form-signin">
                <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit" value="simpan">Back</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$('.js-example-basic-single').select2({
  			theme:"classic"
  		});
  	})
  </script>
</body>



</html>