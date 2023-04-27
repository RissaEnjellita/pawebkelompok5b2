<!DOCTYPE html>

<?php

require "koneksi.php";

if( isset($_GET["tambah"])){
    $id =  $_GET["id"];
    $nama =  $_GET["nama"];
    $nomor_hp = $_GET["nomor_hp"];
    $id_kamera = $_GET["id_kamera"];

    $query = "INSERT INTO photographer VALUES
                ('$id','$nama', '$nomor_hp', '$id_kamera')";
    mysqli_query($conn, $query);

    echo "<script>
            alert('Berhasil Menambahkan Data');
            document.location.href = 'admin.php':
          </script>";
    
    header("Location: admin.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Photographer</title>
</head>
<body>
    <h1>Tambah Photographer</h1>
    <form action="" method="get">
        ID:
        <input type="text" name="id">
        <br>
        Nama:
        <input type="text" name="nama">
        <br>
        Nomor HP:
        <input type="text" name="nomor_hp" >
        <br>
        ID Kamera:
        <input type="text" name="id_kamera">
        <br>
        <button type="submit" name="tambah">TAMBAH</button>
    </form>
</body>
</html>