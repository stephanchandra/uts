<?php
    $host = '172.19.0.2';
    $username = 'root';
    $password = 'root';
    $db = 'Redlock';

    $connect = mysqli_connect($host, $username, $password, $db);

    if ($connect -> connect_errno) {
        echo "Connection Failed: " . $connect -> connect_error;
        exit();
    }
    
    $query = mysqli_query($connect, "SELECT * FROM users");

    while ($row = mysqli_fetch_array($query)) {
        echo "ID: " . $row['ID'] . "<br>";
        echo "Nama: " . $row['Nama'] . "<br>";
        echo "Alamat: " . $row['Alamat'] . "<br>";
        echo "Jabatan: " . $row['Jabatan'] . "<br>";
        echo "<br>";
    }
?>
