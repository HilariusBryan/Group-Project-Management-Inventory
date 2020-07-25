<?php
include '../connect.php';
include '../session.php';
$id = $_GET['id'];
$komposisi = mysqli_query($koneksi, "SELECT * FROM komposisi WHERE id='$id'");
$row = mysqli_fetch_array($komposisi);
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
        <title>Update Komposisi - Marici</title>
    </head>
    <body>
        <?php include 'navbar_komposisi.php'; ?>
        
        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Edit Komposisi - <?php echo $row['kode_brg'];?></h5>
            <form action="update_k.php" method="POST" class="form-signin">
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">
              <!-- <div class="form-label-group">
                <input type="name" id="inputkode" class="form-control" placeholder="Kode Barang" name="kode_brg" value="<?php echo $row['kode_brg'];?>" required autofocus>
                <label for="inputkode">Kode Barang</label>
              </div> -->

              <div class="form-group">
              <label for="tipe_brg">Kode Barang</label>
              <select class="form-control js-example-basic-single" id="kode_brg" name="kode_brg">
                <option data-hidden="true"><?php echo $row['kode_brg']; ?></option>
              <?php 
              $query="SELECT * FROM barang";
              $tipe_results = mysqli_query($koneksi, $query);
              $tipe_options = "";

              while($row_tipe = mysqli_fetch_array($tipe_results))
              {
                $tipe_options = $tipe_options."<option value=".$row_tipe[1].">$row_tipe[1]</option>";
              }
              echo $tipe_options; ?>
              </select>
              </div>

              <div class="form-group">
              <label for="kode_bhn">Kode Bahan</label>
              <select class="form-control js-example-basic-single" id="kode_bhn" name="kode_bhn">
                <option data-hidden="true"><?php echo $row['kode_bhn']; ?></option>
              <?php 
              $query="SELECT * FROM bahan";
              $tipe_results = mysqli_query($koneksi, $query);
              $tipe_options = "";

              while($row_tipe = mysqli_fetch_array($tipe_results))
              {
                $tipe_options = $tipe_options."<option value=".$row_tipe[1].">$row_tipe[1]</option>";
              }
              echo $tipe_options; ?>
              </select>
              </div>

              <div class="form-label-group">
                <input type="name" id="jumlah" class="form-control" placeholder="Jumlah(pcs)" name="jumlah" value="<?php echo $row['jumlah'];?>" required autofocus>
                <label for="jumlah_bhn">Jumlah (pcs)</label>
              </div>

              <div class="form-label-group">
                <input type="name" id="panjang" class="form-control" placeholder="Jumlah(pcs)" name="panjang" value="<?php echo $row['panjang'];?>" required autofocus>
                <label for="panjang_bhn">Panjang (mm)</label>
              </div>

              <div class="form-label-group">
                <input type="name" id="ket" class="form-control" placeholder="Keterangan" name="ket" value="<?php echo $row['ket'];?>" required autofocus>
                <label for="ket">Keterangan</label>
              </div>

              <hr cselass="my-4">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="simpan">Update</button>
             
              </form><br>
              <form action="komposisi.php" method="post" class="form-signin">
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