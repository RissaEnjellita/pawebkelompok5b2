<?php

    require "koneksi.php";

    $query = "SELECT * FROM photographer";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM camera";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "SELECT * FROM customer";
    $result3 = mysqli_query($conn, $query3);

    $query4 = "SELECT * FROM transaction1";
    $result4 = mysqli_query($conn, $query4);

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
    <h1>Photographer</h1>
    <a href="tambah_photographer.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>ID_Kamera</th>
            <th>Pengaturan</th>
        </tr>
    <?php
    while( $row = mysqli_fetch_assoc($result)) {

    ?>
        <tr>
            <td style="text-align: center;"><?php echo $row["id"] ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["nomor_hp"] ?></td>
            <td><?php echo $row["id_kamera"] ?></td>
            <td>
                <a href="delete_photographer.php?id=<?= $row['id'] ?>">HAPUS</a>
                <a href="update_photographer.php?id=<?= $row['id'] ?>">UPDATE</a>
            </td>
        </tr>
    <?php }?>   
    </table>
    
    <h1>Camera</h1>
    <a href="tambah_camera.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kamera</th>
            <th>Jenis</th>
            <th>Kapasitas</th>
            <th>Pengaturan</th>
        </tr>
    <?php
    while( $row = mysqli_fetch_assoc($result2)) {

    ?>
        <tr>
            <td style="text-align: center;"><?php echo $row["id"] ?></td>
            <td><?php echo $row["kamera"] ?></td>
            <td><?php echo $row["jenis"] ?></td>
            <td><?php echo $row["kapasitas"] ?></td>
            <td>
                <a href="delete_camera.php?id=<?= $row['id'] ?>">HAPUS</a>
                <a href="update_camera.php?id=<?= $row['id'] ?>">UPDATE</a>
            </td>
        </tr>
    <?php }?>   
    </table>

    <h1>Customer</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Pengaturan</th>
        </tr>
    <?php
    $i = 1;
    while( $row = mysqli_fetch_assoc($result3)) {

    ?>
        <tr>
            <td style="text-align: center;"><?php echo $i ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["nomor_hp"] ?></td>
            <td><?php echo $row["alamat"] ?></td>
            <td>
                <a href="delete_customer.php?id=<?= $row['nama'] ?>">HAPUS</a>
                <a href="update_customer.php?id=<?= $row['nama'] ?>">UPDATE</a>
            </td>
        </tr>
    <?php $i++ ?>
    <?php }?>   
    </table>

    <h1>Transaction</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>ID Photographer</th>
            <th>Jenis Layanan</th>
            <th>Status</th>
            <th>Pengaturan</th>
        </tr>
    <?php
    $i = 1;
    while( $row = mysqli_fetch_assoc($result4)) {

    ?>
        <tr>
            <td style="text-align: center;"><?php echo $i ?></td>
            <td><?php echo $row["nama_customer"] ?></td>
            <td><?php echo $row["id_photographer"] ?></td>
            <td><?php echo $row["jenis_layanan"] ?></td>
            <td><?php echo $row["status1"] ?></td>
            <td>
                <a href="delete_transaction.php?id=<?= $row['id'] ?>">HAPUS</a>
                <a href="update_transaction.php?id=<?= $row['id'] ?>">UPDATE</a>
            </td>
        </tr>
    <?php $i++ ?>
    <?php }?>   
    </table>
</body>
</html>