<?php
include '../connect.php';
$kode_brg = $_GET['kode_brg'];
$brg = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_brg='$kode_brg'");
$row = mysqli_fetch_array($brg);
?>
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
        <style type="text/css">
          body{
            font-family: 'Roboto', sans-serif;
          }
        </style>
        <title>Update Barang - Marici</title>
    </head>
    <body>
  <?php include 'navbar_barang.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Edit Barang - <?php echo $row['kode_brg'];?></h5>
            <form action="update_b.php" method="POST" class="form-signin">
                <input type="hidden" value="<?php echo $row['id'];?>" name="id_brg">
              <!-- <div class="form-label-group">
                <input type="name" id="inputkode" class="form-control" placeholder="Kode Barang" name="kode_brg" value="<?php echo $row['kode_brg'];?>" required autofocus>
                <label for="inputkode">Kode Barang</label>
              </div> -->

              <div class="form-group">
              <label for="tipe_brg">Tipe Barang</label>
              <select class="form-control js-example-basic-single" id="tipe_brg" name="tipe_brg">
                <option data-hidden="true"><?php echo $row['tipe_brg']; ?></option>
              <?php 
              $query="SELECT * FROM tipebarang";
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
                <input type="name" id="dimensi_brg" class="form-control" placeholder="Dimensi Barang" name="dimensi_brg" value="<?php echo $row['dimensi_brg'];?>" required autofocus>
                <label for="dimensi_brg">Dimensi Barang</label>
              </div>

              <div class="form-group">
              <label for="tipe_motif">Motif Barang</label>
              <select class="form-control js-example-basic-single" id="motif_brg" name="motif_brg">
                <option data-hidden="true"><?php echo $row['motif_brg']; ?></option>
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
              <label for="tipe_warna">Warna Barang</label>
              <select class="form-control js-example-basic-single" id="warna_brg" name="warna_brg">
                <option data-hidden="true"><?php echo $row['warna_brg']; ?></option>
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
                <input type="name" id="produk_brg" class="form-control" placeholder="Produk Bahan" name="produk_brg" value="<?php echo $row['produk_brg'];?>" required autofocus>
                <label for="produk_brg">Produk</label>
              </div>

               <div class="form-label-group">
                <input type="name" id="inputbarang" class="form-control" placeholder="Nama Barang" name="nama_brg" value="<?php echo $row['nama_brg'];?>"required autofocus>
                <label for="inputbarang">Nama Barang</label>
              </div>

               <div class="form-label-group">
                <input type="number" id="inputstok" class="form-control" placeholder="Jumlah Stok" name="stok_brg" value="<?php echo $row['stok_brg'];?>" required autofocus>
                <label for="inputstok">Jumlah Stok</label>
              </div>

              <div class="form-label-group">
                <input type="name" id="inputgbr" class="form-control" placeholder="Gambar (Link IG)" name="gbr" value="<?php echo $row['gbr'];?>"required autofocus>
                <label for="inputgbr">Gambar (Link IG)</label>
              </div>

              <hr cselass="my-4">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="simpan">Update</button>
             
              </form><br>
              <form action="list_barang.php" method="post" class="form-signin">
                <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit" value="simpan">Back</button>
              </form>

              <script type="text/javascript">
    $(document).ready(function(){
      $('.js-example-basic-single').select2({
        theme:"classic"
      });
    })
  </script>
    </body>
</html>