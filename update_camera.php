<!DOCTYPE html>

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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kamera</title>
</head>
<body>
    <h1>Update Kamera</h1>
    <form action="" method="post">
        <?php while( $row = mysqli_fetch_assoc( $result)) {?>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        Kamera:
        <input type="text" name="kamera" value="<?php echo $row['kamera']?>">
        <br>
        Jenis:
        <input type="text" name="jenis" value="<?php echo $row['jenis']?>">
        <br>
        Kapasitas:
        <input type="text" name="kapasitas" value="<?php echo $row['kapasitas']?>">
        <br>
        <button type="submit" name="update">UPDATE</button>
        <?php }?>
    </form>
</body>
</html>