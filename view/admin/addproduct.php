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

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
    		<script>
    			alert('data berhasil ditambahkan!');
    			document.location.href = 'index.php';
    		</script>
    	";
    } else {
        echo "
        	<script>
        		alert('data gagal ditambahkan!');
        		document.location.href = 'addProduct.php';
        	</script>
        ";
    }
}


?>

<body>
    <div class="container">
        <div class="inputData">
            <form accept="" method="post" enctype="multipart/form-data">
                <div class="input-group flex-nowrap mb-2">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-shopping-cart" aria-hidden="true"></i></span>
                    <input name="productName" id="productName" type="text" class="form-control" placeholder="Nama Produk..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group mb-2">
                    <label class="input-group-text" for="inputGroupFile01"><i class="fas fa-image" aria-hidden="true"></i></label>
                    <input name="productImage" id="productImage" type="file" class="form-control" id="inputGroupFile01">
                </div>
                <div class="input-group mb-2">
                    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-angle-double-down" aria-hidden="true"></i></label>
                    <select name="productCategory" class="form-select" id="inputGroupSelect01">
                        <option selected>Pilih kategori...</option>
                        <option value="tshirt">T-SHIRT</option>
                        <option value="outer">OUTER</option>
                        <option value="shirt">SHIRT</option>
                        <option value="pants">PANTS</option>
                        <option value="accessories">ACCESSORIES</option>
                        <option value="dress">DRESS</option>
                        <option value="kerudung">KERUDUNG</option>
                        <option value="rok">ROK</option>
                    </select>
                </div>
                <div class="input-group flex-nowrap mb-2">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-dollar-sign" aria-hidden="true"></i></span>
                    <input name="productPrice" id="productPrice" type="text" class="form-control" placeholder="Harga Produk..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mb-2">
                    <!-- <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user-check" aria-hidden="true"></i></span> -->
                    <input name="productOwner" id="productOwner" type="hidden" value="<?= $username; ?>" class="form-control" placeholder="Masukkan nama akun..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mb-2">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-link" aria-hidden="true"></i></span>
                    <input name="productLink" id="productLink" type="text" class="form-control" placeholder="Link Pembelian..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <button name="submit" id="submit" type="submit" class="btn btn-success">Tambah Data!</button>
                <a class="btn btn-primary" href="index.php" role="button">Kembali dan batal</a>
            </form>
        </div>
    </div>
    <style>
        body {
            margin-top: 75px;
            background-color: #beffd4;
        }


        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 9%;
        }

        .inputData {
            background-color: #fff;
            margin: 5px 5px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>