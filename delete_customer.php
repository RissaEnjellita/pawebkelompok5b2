<?php
require "koneksi.php";

$nama = $_GET["nama"];

if( $id ){
    $query = "DELETE FROM customer WHERE nama = $nama";
    mysqli_query($conn, $query);

    echo "<script>
            alert('Berhasil Menghapus Data')
        </script>";

        header("Location: admin.php");
}

?>