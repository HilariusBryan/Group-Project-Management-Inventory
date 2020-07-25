<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../barang.php">Database Marici</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" id="menu1">
        <a class="nav-link dropdown-toggle" href="#menu1" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true ">
          Barang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="barang/tambah_barang.php">Add Barang</a>
          <a class="dropdown-item" href="barang/list_barang.php">Data Barang</a>
      </li>
      <li class="nav-item dropdown" id="menu2">
        <a class="nav-link dropdown-toggle" href="#menu2" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true ">
          Bahan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="bahan/tambah_bahan.php">Add Bahan</a>
          <a class="dropdown-item" href="bahan/list_bahan.php">Data Bahan</a>
      </li>
      <li class="nav-item dropdown" id="menu3">
        <a class="nav-link dropdown-toggle" href="#menu3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true ">
          Komposisi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="komposisi/tambah_komposisi.php">Add Komposisi</a>
          <a class="dropdown-item" href="komposisi/komposisi.php">List Komposisi</a>
      </li>
      <li class="nav-item dropdown" id="menu4">
        <a class="nav-link dropdown-toggle" href="#menu4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true ">
          Raw Material
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="material/tipe_barang.php">Kode Barang</a>
          <a class="dropdown-item" href="material/tipe_bahan.php">Kode Bahan</a>
          <a class="dropdown-item" href="material/tipe_motif.php">Kode Motif</a>
          <a class="dropdown-item" href="material/tipe_warna.php">Kode Warna</a>
      </li>
      <form class="form-inline" method="post" action="logout.php">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </ul>
  </div>
</nav>
