<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "test_db";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "SELECT * FROM Users";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($rows = mysqli_fetch_assoc($result)) {
//         echo "Name: " . $rows['name'] . "Password: " . $rows['password'];
//     }
// } else {
//     echo "No results";
// }

// $sql = "CREATE TABLE Users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     password VARCHAR(30) NOT NULL
// )";

// $sql = "INSERT INTO Users (name, password) VALUES ('Mahlet', 'mahi')";


$sql = "UPDATE Users SET password='Kid' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Success";
} else {
    echo "Failure";
}

mysqli_close($conn);
