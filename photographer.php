<?php

    require "koneksi.php";

    $query = "SELECT * FROM photographer";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM camera";
    $result2 = mysqli_query($conn, $query2);

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
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>ID_Kamera</th>
                            </tr>
                        </thead>
                    <?php
                    while( $row = mysqli_fetch_assoc($result)) {

                    ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php echo $row["id"] ?></td>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["nomor_hp"] ?></td>
                                <td><?php echo $row["id_kamera"] ?></td>
                            </tr>
                        </tbody>
                    <?php }?>   
                    </table>
                    
                    <h3>Camera</h3>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kamera</th>
                                <th>Jenis</th>
                                <th>Kapasitas</th>
                            </tr>
                        </thead>
                    <?php
                    while( $row = mysqli_fetch_assoc($result2)) {

                    ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php echo $row["id"] ?></td>
                                <td><?php echo $row["kamera"] ?></td>
                                <td><?php echo $row["jenis"] ?></td>
                                <td><?php echo $row["kapasitas"] ?></td>
                            </tr>
                        </tbody>
                    <?php }?>   
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



