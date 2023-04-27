<?php

$conn = mysqli_connect("localhost", "root", "", "photography");
if(!$conn){
    die("Gagal Terhubung ". mysqli_connect_error());
}

?>