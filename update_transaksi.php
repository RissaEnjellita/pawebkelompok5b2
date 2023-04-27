<!DOCTYPE html>

<?php

require "koneksi.php";

$id = $_GET["id"];

$query = "SELECT * FROM transaction1 WHERE id = '$id'";
$result = mysqli_query($conn, $query);

function ubah($data){
    global $conn;

    $id = $_POST["id"];
    $status = $_POST["status"];

    $query = "UPDATE transaction set 
                status1 = '$status',
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
    <title>Update Transaction</title>
</head>
<body>
    <h1>Update Transaction</h1>
    <form action="" method="post">
        <?php while( $row = mysqli_fetch_assoc( $result)) {?>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        Status:
        <input type="text" name="status" value="<?php echo $row['status']?>">
        <br>
        <button type="submit" name="update">UPDATE</button>
        <?php }?>
    </form>
</body>
</html>