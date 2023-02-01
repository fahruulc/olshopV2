<?php
require 'model/dbConfig.php';

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand  text-uppercase fw-bold" href="#"><i class="fas fa-store"></i> Ruur</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Toko</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kategori</a>
        </li>
      </ul>
      <form class="d-flex" action="" method="post">
        <input name="keyword" class="form-control me-1" type="text" placeholder="Kata Kunci" aria-label="Search">
        <button name="cari" value="cari" class="btn btn-light" type="submit">Cari!</button>
      </form>
    </div>
  </div>
</nav>
<link rel="stylesheet" href="../style.css">
<script src="../js/style.js"></script>