<?php

//  Zbiranje IP naslovov

/* if(!isset($_COOKIE['firstTime'])) {
    $conn = new mysqli("localhost", "root", "", "martinpusar");

    if ($conn->connect_error) {
        die("ERROR: Unable to connect: " . $conn->connect_error);
    }
    
    echo 'Connected to the database.<br>';
    
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $result = $conn->query("INSERT INTO visitors (ip_addres) VALUES ($ip)");
    
    
    $conn->close();

    setcookie('firstTime', 'no', time() + (86400 * 30), "/");
} */

//  Yeet to the portfolio

header('Location: portfolio.php');

exit;
