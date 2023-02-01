<?php

require 'assets/css/client/header.php';
require 'assets/css/client/navbar.php';


$terlaris = query("SELECT * FROM firstshop WHERE productCategory = 'terlaris' ORDER BY id DESC");
$produk = query("SELECT * FROM firstshop ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $cari = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Ruur Merch</title>
</head>

<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Rekomendasi Outfit Cewek</h5>
                    <p>Cocok buat ngampus dan jalan-jalan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Rekomendasi Outfit Cowok</h5>
                    <p>Simple tapi tetep keren.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pasti aman</h5>
                    <p>Dan selalu update.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <img src="assets/img/ootd.jpg" class="img-fluid andro" alt="...">
    <div class="container">
        <div class="styleLanding">
            <span></span>
            <h2 class="text-center judulLanding">TERLARIS</h2>
            <span></span>
        </div>
        <div class="row">
            <!-- foreach -->
            <?php $tb = 0; ?>
            <?php foreach ($terlaris as $laris) : ?>
                <div class="col mb-4">
                    <div class="card" style="width: 16rem;">
                        <img style="background-position: center;" src="assets/img/dbs/<?= $laris["productImage"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p style="color: maroon; margin-top: -7px; margin-bottom: -2px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Best Seller</p>
                            <h5 class="card-title"><?= $laris["productName"]; ?></h5>
                            <h5 style="color: green;" class="card-price">Rp<?= $laris["productPrice"]; ?></h5>
                            <p class="card-text">Toko <?= $laris["productOwner"]; ?></p>
                            <a href="<?= $laris["productLink"]; ?>" class="btn btn-success">Link Shopee <i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php if (++$tb == 4) break; ?>
            <?php endforeach; ?>
            <!-- endforeach -->
        </div>
        <div class="styleLanding">
            <span></span>
            <h2 class="text-center judulLanding">TERBARU</h2>
            <span></span>
        </div>
        <div class="row">
            <!-- foreach -->
            <?php $tb = 0; ?>
            <?php foreach ($produk as $prdk) : ?>
                <div class="col mb-4">
                    <div class="card" style="width: 16rem;">
                        <img style="background-position: center;" src="assets/img/dbs/<?= $prdk["productImage"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prdk["productName"]; ?></h5>
                            <h5 style="color: green;" class="card-price">Rp<?= $prdk["productPrice"]; ?></h5>
                            <p class="card-text">Toko <?= $prdk["productOwner"]; ?></p>
                            <a href="<?= $prdk["productLink"]; ?>" class="btn btn-success">Link Shopee <i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php if (++$tb == 4) break; ?>
            <?php endforeach; ?>
            <!-- endforeach -->
            <div class="toko">
                <div class="card text-center">
                    <div class="card-header bg-success">
                        <h5 class="text-light">TOKO</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mau liat lebih banyak lagi ?</h5>
                        <p class="card-text">Ayo kunjungi toko kami, kamu bisa pilih barang sesuai kategori dan ada fitur cari produknya juga lhoo.<br> kamu bisa lebih cepat mencari barang yang kamu ingin kan.</p>
                        <a href="view/client/shopAllCategory.php?kategori=<?= $table = 'firstshop'; ?>" class="btn btn-success">Kunjungi Toko <i class="fas fa-store"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="categoryy">
        <div class="styleLanding">
            <span></span>
            <h2 class="text-center judulLanding">KATEGORI</h2>
            <span></span>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="article-container-firstRow text-uppercase">
                        <a href="view/client/shopAllCategory.php?kategori=<?= $table = 'firstshop'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-firstRow">ootd</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="article-container-secondRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'tshirt'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-secondRow tshirt">t-shirt</div>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="article-container-secondRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'outer'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-secondRow outer">outer</div>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="article-container-secondRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'shirt'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-secondRow shirt">shirt</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="article-container-secondRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'pants'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-secondRow pants">pants</div>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="article-container-secondRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'accessories'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-secondRow accessories">accessories</div>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="article-container-secondRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'dress'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-secondRow dress">DRESS</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="article-container-thirdRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'kerudung'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-thirdRow kerudung">kerudung</div>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="article-container-thirdRow text-uppercase">
                        <a href="view/client/shopCategory.php?kategori=<?= $table = 'rok'; ?>" style="text-decoration: none;">
                            <div class="article-img-holder-thirdRow rok">rok</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .row {
            padding-bottom: 40px;
        }
    </style>


    <?php require 'assets/css/client/footer.php'; ?>
    <script src="assets/js/style.js"></script>

</body>