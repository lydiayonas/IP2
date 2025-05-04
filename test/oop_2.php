<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "test_db_1";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE TABLE IF NOT EXISTS dogs (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     color VARCHAR(50) NOT NULL
// )";


// $sql = "INSERT INTO dogs (name, color) VALUES ('Marshmellow', 'White')";

// if ($conn->query($sql) === TRUE) {
//     echo "success";
// } else {
//     echo "failure";
// }

// $sql = "SELECT id, name, color FROM dogs";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($rows = $result->fetch_object()) {
//         echo $rows->id . ' ' . $rows->name . ' ' . $rows->color . '<br />';
//     }
// }

// $sql = "UPDATE dogs SET name='Buchi', color='Brown' WHERE id=1";

$sql = "DELETE FROM dogs WHERE id=2";
if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Failure";
}

$conn->close();
