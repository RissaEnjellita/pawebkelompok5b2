<!DOCTYPE html>

<?php

require "koneksi.php";

$nama = $_GET["nama"];

$query = "SELECT * FROM customer WHERE id = '$nama'";
$result = mysqli_query($conn, $query);

function ubah($data){
    global $conn;

    $nama2 = $_POST["nama"];
    $nomor_hp = $_POST["nomor_hp"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE photographer set
                nama = '$nama2',
                nomor_hp = '$nomor_hp',
                id_kamera = '$alamat'
                WHERE id = '$nama'";
                return mysqli_query($conn, $query);
}

if( isset($_GET[$nama])){
    header("Location: admin.php");
    exit;
}else if( mysqli_num_rows($result) > 0){
}else{
    header("Location: admin.php");
    exit;
}



if( isset($_POST["update"])){
    if( ubah($_POST) > 0){
     echo "<script>
            alert('Berhasil Mengubah Data');
            document.location.href = 'admin.php'
           </script>";
    }else{
    echo "<script>
            alert('Gagal Mengubah Data');
            document.location.href = 'admin.php'
          </script>";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
</head>
<body>
    <h1>Update Customer</h1>
    <form action="" method="post">
        <?php while( $row = mysqli_fetch_assoc( $result)) {?>
        Nama:
        <input type="text" name="nama" value="<?php echo $row['nama']?>">
        <br>
        No. HP:
        <input type="text" name="nomor_hp" value="<?php echo $row['nomor_hp']?>">
        <br>
        Alamat:
        <input type="text" name="alamat" value="<?php echo $row['alamat']?>">
        <br>
        <button type="submit" name="update">UPDATE</button>
        <?php }?>
    </form>
</body>
</html>