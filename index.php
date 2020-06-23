<?php

//  Zbiranje IP naslovov

if (!isset($_COOKIE['firstTime'])) {
    $servername = "localhost";
    $username = "martinpusar";
    $password = "jWsY0oYi";
    $dbname = "martinpusar";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO visitors (ip_addres) VALUES ('$ip')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    setcookie('firstTime', 'no', time() + (86400 * 365), "/");
}







//  Yeet to the portfolio

header('Location: portfolio.php');

exit;