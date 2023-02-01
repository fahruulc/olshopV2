<?php
require '../../assets/css/client/sidebarComponent.php';
$ambil = $_GET;
$colomn = implode(" ", $ambil);
$produk = query("SELECT * FROM firstshop WHERE productCategory = '$colomn'");
if (isset($_POST["cari"])) {
    $produk = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- foreach -->
            <?php foreach ($produk as $prdk) : ?>
                <div class="col mb-4">
                    <div class="card" style="width: 16rem;">
                        <img style="background-position: center;" src="../../assets/img/dbs/<?= $prdk["productImage"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prdk["productName"]; ?></h5>
                            <h5 style="color: green;" class="card-price">Rp<?= $prdk["productPrice"]; ?></h5>
                            <p class="card-text">Toko <?= $prdk["productOwner"]; ?></p>
                            <a href="<?= $prdk["productLink"]; ?>" class="btn btn-success">Link Shopee <i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- endforeach -->

        </div>
    </div>
</body>

</html>