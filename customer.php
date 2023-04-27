<?php

    require "koneksi.php";

    $query = "SELECT * FROM photographer";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM camera";
    $result2 = mysqli_query($conn, $query2);

    if( isset($_GET["tambah"])){
        $nama2 =  $_GET["nama2"];
        $id_photographer = $_GET["id_photographer"];
        $jenis_layanan = $_GET["jenis_layanan"];
    
        $query3 = "INSERT INTO transaction1 VALUES
                    ('','$nama2', '$id_photographer', '$jenis_layanan','')";
        mysqli_query($conn, $query3);
    
        echo "<script>
                alert('Berhasil Memesan!');
                document.location.href = 'customer.php':
              </script>";
        
        header("Location: customer.php");
    }
    
    if( isset($_GET["tambah2"])){
        $nama =  $_GET["nama"];
        $nomor_hp = $_GET["nomor_hp"];
        $alamat = $_GET["alamat"];
    
        $query4 = "INSERT INTO customer VALUES
                    ('$nama', '$nomor_hp', '$alamat')";
        mysqli_query($conn, $query4);
    
        echo "<script>
                alert('Berhasil Mendaftar!');
                document.location.href = 'customer.php':
              </script>";
        
        header("Location: customer.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer</title>
</head>
<body>
    <nav>
        <a href="logout.php">Logout</a>
    </nav>
    <h1>Daftar Member</h1>
    <form action="" method="get">
        Nama:
        <input type="text" name="nama">
        <br>
        Nomor HP:
        <input type="text" name="nomor_hp" >
        <br>
        Alamat:
        <input type="text" name="alamat">
        <br>
        <button type="submit" name="tambah2">Daftar</button>
    </form>
    <h1>Customer</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>ID_Kamera</th>
        </tr>
    <?php
    while( $row = mysqli_fetch_assoc($result)) {

    ?>
        <tr>
            <td style="text-align: center;"><?php echo $row["id"] ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["nomor_hp"] ?></td>
            <td><?php echo $row["id_kamera"] ?></td>
        </tr>
    <?php }?>   
    </table>
    
    <h1>Camera</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kamera</th>
            <th>Jenis</th>
            <th>Kapasitas</th>
        </tr>
    <?php
    while( $row = mysqli_fetch_assoc($result2)) {

    ?>
        <tr>
            <td style="text-align: center;"><?php echo $row["id"] ?></td>
            <td><?php echo $row["kamera"] ?></td>
            <td><?php echo $row["jenis"] ?></td>
            <td><?php echo $row["kapasitas"] ?></td>
        </tr>
    <?php }?>   
    </table>
    <h1>Memesan Layanan</h1>
    <form action="" method="get">
        Nama Anda:
        <input type="text" name="nama2">
        <br>
        ID Photographer:
        <input type="text" name="id_photographer" >
        <br>
        Jenis Layanan:
        <input type="text" name="jenis_layanan">
        <br>
        <button type="submit" name="tambah">Pesan</button>
    </form>
</body>
</html>