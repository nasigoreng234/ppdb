<?php 
    $nama_host = "localhost";
    $username = "root";
    $password = "";
    $database = "ppdb";
    $conn = mysqli_connect($nama_host, $username, $password, $database);
    if (!$conn) {
        echo "Error: Database tidak terhubung.";
    }
?>