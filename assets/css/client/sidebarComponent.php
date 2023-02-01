<?php
require '../../model/dbConfig.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styleclient.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <title>Hello, world!</title>
</head>

<body>
    <style>
        .container-fluid {
            margin: 0px 10px;
        }
    </style>
    <nav class="navbar navbar-dark bg-light">
        <div class="container-fluid">
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i> Pilih Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="shopAllCategory.php?kategori=<?= $table = 'firstshop'; ?>">SEMUA</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'terlaris'; ?>">TERLARIS</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'tshirt'; ?>">T-SHIRT</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'outer'; ?>">OUTER</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'shirt'; ?>">SHIRT</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'pants'; ?>">PANTS</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'accessories'; ?>">ACCESSORIES</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'dress'; ?>">DRESS</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'kerudung'; ?>">KERUDUNG</a></li>
                    <li><a class="dropdown-item" href="shopCategory.php?kategori=<?= $table = 'rok'; ?>">ROK</a></li>
                    <li><a class="dropdown-item" href="../../index.php">KEMBALI</a></li>
                </ul>
            </div>
            <!-- <h3 class="text-success">TOKO </h3> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cari Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="d-flex" action="" method="post">
                                <input name="keyword" class="form-control me-2" type="text" placeholder="Cari produk!" aria-label="Search">
                                <button name="cari" value="cari" class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>