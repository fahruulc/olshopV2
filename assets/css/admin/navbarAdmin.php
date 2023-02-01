<?php
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
$username = $_SESSION['username'];

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
    <div class="container-fluid">
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="addProduct.php"><i class="fas fa-plus"></i> Tambah Produk</a></li>
                <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out"></i> logout</a></li>
            </ul>
        </div>
        <a class="navbar-brand text-dark" href="#">Holaa <?= $username; ?> <i class="fas fa-address-card"></i></a>
    </div>
</nav>