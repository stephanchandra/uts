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
    $count = 0;

    while ($row = mysqli_fetch_array($query)) {
        $count++;
    }

    echo "Number of users: " . $count;
?>
