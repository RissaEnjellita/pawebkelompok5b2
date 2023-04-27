<?php

    require "koneksi.php";

    $query = "SELECT * FROM photographer";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM camera";
    $result2 = mysqli_query($conn, $query2);
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
</body>
</html>