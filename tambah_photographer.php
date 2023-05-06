

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
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/crud.css">
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
                <h3>Tambah Photographer</h3>
                <form action="" method="get">
                    ID:
                    <br>
                    <br>
                    <input type="text" name="id">
                    <br>
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
                    ID Kamera:
                    <br>
                    <br>
                    <input type="text" name="id_kamera">
                    <br>
                    <button type="submit" name="tambah">TAMBAH</button>
            </form>

            
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



