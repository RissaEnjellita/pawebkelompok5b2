

<?php

require "koneksi.php";

$id = $_GET["id"];

$query = "SELECT * FROM camera WHERE id = '$id'";
$result = mysqli_query($conn, $query);

function ubah($data){
    global $conn;

    $id = $_POST["id"];
    $kamera = $_POST["kamera"];
    $jenis = $_POST["jenis"];
    $kapasitas = $_POST["kapasitas"];

    $query = "UPDATE camera set
                kameran = '$kamera',
                jenis = '$jenis',
                kapasitas = '$kapasitas'
                WHERE id = '$id'";
                return mysqli_query($conn, $query);
}

if( isset($_GET[$id])){
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
                <h3>Update Kamera</h3>
                <form action="" method="post">
                <?php while( $row = mysqli_fetch_assoc( $result)) {?>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                Kamera:
                <br>
                <br>
                <input type="text" name="kamera" value="<?php echo $row['kamera']?>">
                <br>
                Jenis:
                <br>
                <br>
                <input type="text" name="jenis" value="<?php echo $row['jenis']?>">
                <br>
                Kapasitas:
                <br>
                <br>
                <input type="text" name="kapasitas" value="<?php echo $row['kapasitas']?>">
                <br>
                <button type="submit" name="update">UPDATE</button>
                <?php }?>
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
