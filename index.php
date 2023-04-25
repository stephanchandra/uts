<?php
    $host = '172.19.0.2';
    $user = 'root';
    $pass = 'root';
    $db = 'Redlock';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn){
        echo "Connection Failed!";
        die();
    }
    
    $query = mysqli_query($conn, "SELECT * FROM users");

    while ($row = mysqli_fetch_array($query)) {
        echo "ID: " . $row['ID'] . " Nama: " . $row['Nama'] . " Alamat: " . $row['Alamat'] .  " Jabatan: " . $row['Jabatan'] . "<br>";
    }
?>
