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

<?php
require "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/customer.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolibsite</title>

    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <!-- <p><b>Hello, </b><span id='hello' style="font-weight: 600;"></span></p>     -->
                <p><b>ABSLT STUDIO</b></p>
                <a href="customer.php"><b>Book Now</b></a>
                <a href="kontak.php">Contact Us</a>
                <a href="portofolio.php">Portofolio</a>
                <a href="about.php">About us</a>
                <a href="webphoto.php">Home</a>
                <a href="logout.php">Logout</a>
                <br> 
            </div>
            <div class="content">
                <h3>Daftar Member</h3>
                <form action="" method="get">
                    Nama:
                    <br>
                    <br>
                    <input type="text" name="nama">
                    <br>
                    Nomor HP:
                    <br>
                    <br>
                    <input type="text" name="nomor_hp" >
                    <br>
                    Alamat:
                    <br>
                    <br>
                    <input type="text" name="alamat">
                    <br>
                    <button type="submit" name="tambah2">Daftar</button>
                </form>
                    <h3>Customer</h3>
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
                    <h3>Memesan Layanan</h3>
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
                
                        </div>
                        <footer>
                            <b>ABSLT STUDIO</b></a>
                            <br>
                            <p id="slogan">REDEFINING MOMENTS</p>
                            <br>
                            <p id="kontak"><b>Found us</b></p>
                            <br>
                            
                                <a href="https://instagram.com/indrabna?igshid=OGQ2MjdiOTE=" target="_blank" ><img src="img/ig.png"></a>  
                                <a href=""><img src="img/yt.png"></a>
                                <br><br>
                                <div class="copy">
                                    <p><b>&copy; 2023 Abslt Studios. All rights reserved.</b></p>
                                </div>
                 </footer>
            </div>
    </body>
</html>