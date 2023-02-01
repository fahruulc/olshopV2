<?php


$conn = mysqli_connect("localhost", "(your username)", "(your password)", "your db name");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword)
{
    $query = "SELECT * FROM firstshop
				WHERE 
			productName LIKE '%$keyword%' OR 
			productOwner LIKE '%$keyword%' OR
			id LIKE '$keyword'

	";
    return query($query);
}
function cariAdmin($username, $keyword)
{
    $query = "SELECT * FROM firstshop
				WHERE productOwner = '$username'
                AND
			productName LIKE '%$keyword%' OR 
			id LIKE '$keyword'

	";
    return query($query);
}

function tambah($data)
{
    global $conn;
    $productName = htmlspecialchars($data["productName"]);

    // fungsi upload
    $productImage = upload();
    if (!$productImage) {
        return false;
    }


    $productCategory = htmlspecialchars($data["productCategory"]);
    $productPrice = htmlspecialchars($data["productPrice"]);
    $productOwner = htmlspecialchars($data["productOwner"]);
    $productLink = htmlspecialchars($data["productLink"]);

    $query = "INSERT INTO firstshop
				VALUES
				('', '$productName', '$productCategory', '$productImage', '$productPrice', '$productOwner', '$productLink')
	";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function upload()
{
    $namaFile = $_FILES['productImage']['name'];
    $ukuranFile = $_FILES['productImage']['size'];
    $error = $_FILES['productImage']['error'];
    $tmpName = $_FILES['productImage']['tmp_name'];




    // cek apakah tidak ada img  yg di uload
    if ($error === 4) {
        echo "<script>
				alert('silahkan  pilih gambar terebih dahulu!');
			</script>";
        return false;
    }


    //cek apakah ekstesinya benar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('file yang anda upload bukan gambar!');
			</script>";
        return false;
    }

    // cek ukuran gambar
    if ($ukuranFile > 5000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			</script>";
        return false;
    }


    // generate new name for first photo
    $nfb1 = uniqid();
    $nfb1 .= '.';
    $nfb1 .= $ekstensiGambar;


    //lolos pengecekan 
    if (move_uploaded_file($tmpName, '../../assets/img/dbs/' . $nfb1)) {
        return $nfb1;
    }
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $productName = htmlspecialchars($data["productName"]);
    $productCategory = htmlspecialchars($data["productCategory"]);
    $productOldImage = htmlspecialchars($data["productOldImage"]);

    //cek apakah admin pilih gambar baru 
    if ($_FILES['productImage']['error'] === 4) {
        $productImage = $productOldImage;
    } else {
        $productImage = upload();
    }

    $productPrice = htmlspecialchars($data["productPrice"]);
    $productOwner = htmlspecialchars($data["productOwner"]);
    $productLink = htmlspecialchars($data["productLink"]);

    $query = "UPDATE firstshop SET
        productName = '$productName',
        productCategory = '$productCategory',
        productImage = '$productImage',
        productPrice = '$productPrice',
        productOwner = '$productOwner',
        productLink = '$productLink'
        WHERE id = $id
";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM firstshop WHERE id = $id");

    return mysqli_affected_rows($conn);
}
