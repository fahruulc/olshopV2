<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: admin/index.php");
}

require '../model/dbConfig.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["login"] = true;
        header("Location: admin/index.php");
        exit;
    }
    $error = true;
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="inputData text-center">
            <h1 class="text-center">Login</h1>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Peringatan!</strong> Username/Password salah.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <br>
            <form action="" method="post">
                <div class=" input-group flex-nowrap">
                    <span for="username" class="input-group-text" id="addon-wrapping"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span for="password" class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <br>
                <button type="submit" name="login" class="btn btn-success mb-2">Login!</button>
                <br>
                <a class="btn btn-primary" href="../index.php" role="button">Kembali</a>
            </form>
        </div>
    </div>

    <style>
        body {
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
            margin: 20px 30px;
            padding: 50px;
        }
    </style>
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