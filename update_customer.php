
<?php

require "koneksi.php";

$nama = $_GET["nama"];

$query = "SELECT * FROM customer WHERE id = '$nama'";
$result = mysqli_query($conn, $query);

function ubah($data){
    global $conn;

    $nama2 = $_POST["nama"];
    $nomor_hp = $_POST["nomor_hp"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE photographer set
                nama = '$nama2',
                nomor_hp = '$nomor_hp',
                id_kamera = '$alamat'
                WHERE id = '$nama'";
                return mysqli_query($conn, $query);
}

if( isset($_GET[$nama])){
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
            <h3>Update Customer</h3>
            <form action="" method="post">
                <?php while( $row = mysqli_fetch_assoc( $result)) {?>
                Nama:
                <br>
                <br>
                <input type="text" name="nama" value="<?php echo $row['nama']?>">
                <br>
                No. HP:
                <br>
                <br>
                <input type="text" name="nomor_hp" value="<?php echo $row['nomor_hp']?>">
                <br>
                Alamat:
                <br>
                <br>
                <input type="text" name="alamat" value="<?php echo $row['alamat']?>">
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

