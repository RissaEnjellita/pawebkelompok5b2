<!DOCTYPE html>

<?php
require "koneksi.php";

$nama = $_GET["nama"];

// Ambil data customer berdasarkan nama dari database
$query = "SELECT * FROM customer WHERE nama = '$nama'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    // Ambil data baru dari form, jika tidak diisi maka gunakan data lama
    $nama2 = $_POST["nama"] ?? $row['nama'];
    $nomor_hp = $_POST["nomor_hp"] ?? $row['nomor_hp'];
    $alamat = $_POST["alamat"] ?? $row['alamat'];

    mysqli_query($conn, "SET foreign_key_checks = 0");
    mysqli_query($conn, "UPDATE transaction1 SET nama_customer='$nama2' WHERE nama_customer='$row[nama]'");
    mysqli_query($conn, "SET foreign_key_checks = 1");

    // Ubah data pada tabel customer
    $query1 = "UPDATE customer SET
                nama = '$nama2',
                nomor_hp = '$nomor_hp',
                alamat = '$alamat'
                WHERE nama = '$row[nama]'";
    mysqli_query($conn, $query1);
    
    
    if (mysqli_affected_rows($conn) >= 0) {
        if (mysqli_affected_rows($conn) == 0) {
            echo "<script>
                    alert('Tidak Ada Perubahan Data');
                    document.location.href = 'admin.php'
                  </script>";
        } else {
            echo "<script>
                    alert('Berhasil Mengubah Data');
                    document.location.href = 'admin.php'
                  </script>";
        }
    } else {
        echo "<script>
                alert('Gagal Mengubah Data');
                document.location.href = 'admin.php'
              </script>";
    }
    
    
}




// Tampilkan form untuk mengupdate data customer
if ($row) {
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
                Nama:<br><br>
                <input type="text" name="nama" value="<?php echo $row['nama']?>">
                <br><br>
                No. HP:<br><br>
                <input type="text" name="nomor_hp" value="<?php echo $row['nomor_hp']?>">
                <br><br>
                Alamat:<br><br>
                <input type="text" name="alamat" value="<?php echo $row['alamat']?>">
                <br><br>
                <button type="submit" name="update">UPDATE</button>
            </form>

            <?php } ?>
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


