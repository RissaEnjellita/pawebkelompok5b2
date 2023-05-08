<?php
require "koneksi.php";

$nama = $_GET["nama"];

mysqli_query($conn, "SET foreign_key_checks = 0");
mysqli_query($conn, "DELETE FROM transaction1 WHERE nama_customer='$nama'");
mysqli_query($conn, "SET foreign_key_checks = 1");

$hapus = mysqli_query($conn, "DELETE FROM customer WHERE nama = '$nama'");

if ($hapus) {
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