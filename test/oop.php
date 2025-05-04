<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "test_db_1";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " + $conn->connect_error);
}

// $sql = "CREATE DATABASE test_db_1";

// $sql = "CREATE TABLE Users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL
// )";

// $sql = "INSERT INTO Users (name, password) VALUES ('Mahlet', 'mahi')";



// if ($conn->query($sql) === TRUE) {
//     echo "Success";
// } else {
//     echo "Failure";
// }

// $sql = "SELECT * FROM Users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($rows = $result->fetch_object()) {
//         echo $rows->name . " " . $rows->password . "<br />";
//     }
// }

// $sql = "UPDATE Users SET password='kid' WHERE id = 1";

$sql = "DELETE FROM users WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "failure";
}

$conn->close();
