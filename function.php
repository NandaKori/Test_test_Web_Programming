<?php
    include "config.php";
    $conn = mysqli_connect($host, $user, $pass, $db, $port) or die(mysqli_connect_error());

    // membuat tabel
    $tbname = "tb_user";
    $sql = "CREATE TABLE $tbname (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(20), 
            passkey VARCHAR(255),
            idu0ser VARCHAR(255)
    )";

    $hasil = mysqli_query($conn, $sql);
    if($hasil) {
        echo "Tabel $tbname berhasil dibuat!";
        } else {
            echo "Tabel $tbname gagal dibuat!";
    }

    mysqli_close($conn);