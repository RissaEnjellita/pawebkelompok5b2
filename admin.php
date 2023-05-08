<?php

    require "koneksi.php";



    $query4 = "SELECT * FROM transaction1";
    $result4 = mysqli_query($conn, $query4);

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolibsite</title>

    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <p><b>ABSLT STUDIO</b></p>
                <a href="logout.php">Logout</a>
            </div>
            <div class="content">
                <div class="service">
                    <h3>Photographer</h3>
                    <div class="tambah">
                        <a href="tambah_photographer.php">Tambah</a>
                    </div>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>ID_Kamera</th>
                                <th>Pengaturan</th>
                            </tr>
                        </thead>
                    <?php
                        $ambil = mysqli_query($conn, "SELECT * FROM photographer");
                        $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

                    ?>
                        <tbody>
                        <?php foreach($result as $result) : ?>
                            <tr>
                                <td scope="row" style="text-align: center;"><?php echo $result["id"] ?></td>
                                <td><?php echo $result["nama"] ?></td>
                                <td><?php echo $result["nomor_hp"] ?></td>
                                <td><?php echo $result["id_kamera"] ?></td>
                                <td>
                                    <a href="delete_photographer.php?id=<?= $result['id'] ?>">HAPUS</a>
                                    <a href="update_photographer.php?id=<?= $result['id'] ?>">UPDATE</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach?>   
                    </table>
                    
                    <h3>Camera</h3>
                    <div class="tambah">
                        <a href="tambah_camera.php">Tambah</a>
                    </div>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kamera</th>
                                <th>Jenis</th>
                                <th>Kapasitas</th>
                                <th>Pengaturan</th>
                            </tr>
                        </thead>
                    <?php
                        $ambil = mysqli_query($conn, "SELECT * FROM camera");
                        $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

                    ?>
                        <tbody>
                        <?php foreach($result as $result) : ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $result["id"] ?></td>
                                <td><?php echo $result["kamera"] ?></td>
                                <td><?php echo $result["jenis"] ?></td>
                                <td><?php echo $result["kapasitas"] ?></td>
                                <td>
                                    <a href="delete_camera.php?id=<?= $result['id'] ?>">HAPUS</a>
                                    <a href="update_camera.php?id=<?= $result['id'] ?>">UPDATE</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach?>  
                    </table>

                    <h3>Customer</h3>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th>Pengaturan</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                    <?php
                        $ambil = mysqli_query($conn, "SELECT * FROM customer");
                        $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

                        ?>
                        <tbody>
                        <?php foreach($result as $result) : ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $i ?></td>
                                <td><?php echo $result["nama"] ?></td>
                                <td><?php echo $result["nomor_hp"] ?></td>
                                <td><?php echo $result["alamat"] ?></td>
                                <td>
                                    <a href="delete_customer.php?nama=<?= $result['nama'] ?>">HAPUS</a>
                                    <a href="update_customer.php?nama=<?= $result['nama'] ?>">UPDATE</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php $i++ ?>
                    <?php endforeach?> 
                    </table>

                    <h3>Transaction</h3>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>ID Photographer</th>
                                <th>Jenis Layanan</th>
                                <th>Status</th>
                                <th>Pengaturan</th>
                            </tr>
                        </thead>
                    <?php
                    $i = 1;
                    while( $row = mysqli_fetch_assoc($result4)) {

                    ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php echo $i ?></td>
                                <td><?php echo $row["nama_customer"] ?></td>
                                <td><?php echo $row["id_photographer"] ?></td>
                                <td><?php echo $row["jenis_layanan"] ?></td>
                                <td><?php echo $row["status1"] ?></td>
                                <td>
                                    <a href="delete_transaction.php?id=<?= $row['id'] ?>">HAPUS</a>
                                    <a href="update_transaksi.php?id=<?= $row['id'] ?>">UPDATE</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php $i++ ?>
                    <?php }?>   
                    </table>

                </div>
            </div>
            <footer>
                <b>ABSLT STUDIO</b></a>
                <br>
                <p id="slogan">REDEFINING MOMENTS</p>
                <br>
                <p id="kontak"><b>Found us</b></p>
                <br>
                
                    <a href="https://instagram.com/indrabna?igshid=OGQ2MjdiOTE=" target="_blank" ><img src="../img/ig.png"></a>  
                    <a href=""><img src="../img/yt.png"></a>
                    <br><br>
                    <div class="copy">
                        <p><b>&copy; 2023 Abslt Studios. All rights reserved.</b></p>
                    </div>
                </footer>
        </div>
    </body>
</html>



