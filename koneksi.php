<?php
    include "config.php";
    
    $conn = mysqli_connect($host, $user, $pass);
    if(!$conn) {
        die("Koneksi gagal : ".mysqli_connect_error());
    } else {

        // membuat database
        $sql = "CREATE DATABASE $db";
        $hasil = mysqli_query($conn, $sql);

        if($hasil) {
            echo "Database $db berhasil dibuat!";
        } else {
            echo "Database $db gagal dibuat!";

        }
    }
?>