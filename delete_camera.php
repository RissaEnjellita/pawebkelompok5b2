<?php
require "koneksi.php";

$id = $_GET["id"];

mysqli_query($conn, "SET foreign_key_checks = 0");
mysqli_query($conn, "UPDATE photographer SET id_kamera=NULL WHERE id_kamera='$id'");
mysqli_query($conn, "SET foreign_key_checks = 1");

$hapus = mysqli_query($conn, "DELETE FROM camera WHERE id = '$id'");

if( $hapus ){
    echo "<script>
        alert('Berhasil Menghapus Data');
        window.location.href='admin.php';
        </script>";
} else {
    echo "<script>
        alert('Gagal Menghapus Data');
        window.location.href='admin.php';
        </script>";
}

?>