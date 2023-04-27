<?php
require "koneksi.php";

$id = $_GET["id"];

if( $id ){
    $query = "DELETE FROM transaction1 WHERE ID = $id";
    mysqli_query($conn, $query);

    echo "<script>
            alert('Berhasil Menghapus Data')
        </script>";

        header("Location: admin.php");
}

?>