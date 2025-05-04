<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($server, $username, $password, $db_name);

if (!$conn) {
    die("Connectiion Failed: " . mysqli_connect_error($conn));
}

// $sql = "CREATE TABLE IF NOT EXISTS Dogs (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     color VARCHAR(50) NOT NULL
// )";

// $sql = "INSERT INTO dogs (name, color) VALUES ('Marshmello', 'White')";

// $sql = "SELECT id, name, color FROM dogs";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($rows = mysqli_fetch_assoc($result)) {
//         echo $rows['id'] . " " . $rows['name'] . " " . $rows["color"] . "<br />";
//     }
// } else {
//     echo "failure";
// }

// $sql = "UPDATE dogs SET name='Buchi', color='Brown' WHERE id = 1";

$sql = "DELETE FROM dogs WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Failure";
}
