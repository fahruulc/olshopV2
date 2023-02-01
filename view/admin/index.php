<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

require '../../model/dbConfig.php';
require '../../assets/css/admin/headerAdmin.php';
require '../../assets/css/admin/navbarAdmin.php';

$username = $_SESSION['username'];
$produk = query("SELECT * FROM firstshop WHERE productOwner = '$username'");
if (isset($_POST["cari"])) {
    $produk = cariAdmin($_SESSION['username'], $_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- https://github.com/colorlibhq/AdminLTE -->
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form class="d-flex" action="" method="post">
            <input name="keyword" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
            <button name="cari" value="cari" class="btn btn-success" type="submit">Search</button>
        </form>
        <!-- <a href="logout.php">Logout</a> -->
        <div class="container">
            <div class="row">
                <!-- foreach -->

                <table class="table table-light table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Aksi</th>
                            <th>Nama Produk</th>
                            <th>Kategori Produk</th>
                            <th>Gambar Produk</th>
                            <th>Harga Produk</th>
                            <th>Link Pembelian</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($produk as $prdk) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="updateProduct.php?id=<?= $prdk["id"]; ?>" class="btn btn-primary">ubah</a>
                                        <a href="deleteProduct.php?id=<?= $prdk["id"]; ?>" class="btn btn-danger" onclick="return confirm('Konfirmasi penghapusan data');">hapus</a>
                                    </div>
                                </td>
                                <td><?= $prdk["productName"]; ?></td>
                                <td><?= $prdk["productCategory"]; ?></td>
                                <td><?= $prdk["productImage"]; ?></td>
                                <td><?= $prdk["productPrice"]; ?></td>
                                <td><?= $prdk["productLink"]; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>


                <!-- endforeach -->

            </div>
        </div>
    </div>
    <style>
        body {
            margin-top: 75px;
            background-color: #beffd4;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</body>

</html>