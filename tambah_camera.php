<!DOCTYPE html>

<?php

require "koneksi.php";

if( isset($_GET["tambah"])){
    $id =  $_GET["id"];
    $kamera =  $_GET["kamera"];
    $jenis = $_GET["jenis"];
    $kapasitas = $_GET["kapasitas"];

    $query = "INSERT INTO camera VALUES
                ('$id','$kamera', '$jenis', '$kapasitas')";
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
    <title>Tambah Kamera</title>
</head>
<body>
    <h1>Tambah Kamera</h1>
    <form action="" method="get">
        ID:
        <input type="text" name="id">
        <br>
        Kamera:
        <input type="text" name="nama">
        <br>
        Jenis:
        <input type="text" name="jenis" >
        <br>
        Kapasitas:
        <input type="text" name="kapasitas">
        <br>
        <button type="submit" name="tambah">TAMBAH</button>
    </form>
</body>
</html>