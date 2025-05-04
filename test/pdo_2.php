<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "test_db_2";

try {
    $dsn = "mysql:host=$server;dbname=$db_name";
    $conn = new PDO($dsn, $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "CREATE TABLE dogs (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(50) NOT NULL,
    //     color VARCHAR(50) NOT NULL
    // )";

    // $conn->exec($sql);

    // $stmt = $conn->prepare("INSERT INTO dogs (name, color) VALUES (:name, :color)");
    // $stmt->bindParam(':name', $name);
    // $stmt->bindParam(':color', $color);

    // $name = "Marshmello";
    // $color = "White";
    // $stmt->execute();

    // $stmt = $conn->prepare("SELECT id, name, color FROM dogs");
    // $stmt->execute();
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($result as $rows) {
    //     echo $rows['id'] . ' ' . $rows['name'] . ' ' . $rows['color'] . '<br />';
    // }

    // $stmt = $conn->prepare("UPDATE dogs SET color=:color WHERE id=:id");
    // $stmt->bindParam(':color', $color);
    // $stmt->bindParam(':id', $id);

    // $color = "Brown";
    // $id = 1;
    // $stmt->execute();

    $stmt = $conn->prepare("DELETE FROM dogs WHERE id=:id");
    $stmt->bindParam(':id', $id);

    $id = 2;
    $stmt->execute();

    echo "Success";

    $conn = null;
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
