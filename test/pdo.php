<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "test_db_2";

try {
    $dsn = "mysql:host=$server;dbname=$db_name";
    $conn = new PDO($dsn, $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "CREATE DATABASE test_db_2";

    // $sql = "CREATE TABLE Users (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(50) NOT NULL,
    //     password VARCHAR(50) NOT NULL
    // )";

    // $conn->exec($sql);

    // $stmt = $conn->prepare("INSERT INTO Users (name, password) VALUES (:name, :password)");
    // $stmt->bindParam(':name', $name);
    // $stmt->bindParam(':password', $pass);

    // $name = "Mahlet";
    // $pass = "Mahi";
    // $stmt->execute();

    // $stmt = $conn->prepare("SELECT * FROM Users");
    // $stmt->execute();

    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($result as $rows) {
    //     echo $rows['name'] . ' ' . $rows['password'];
    // }

    // $stmt = $conn->prepare("UPDATE Users SET password=:password WHERE id=:id");
    // $stmt->bindParam(':password', $pass);
    // $stmt->bindParam(':id', $id);

    // $pass = "kido";
    // $id = 1;
    // $stmt->execute();

    // $stmt = $conn->prepare("DELETE FROM Users WHERE id=:id");
    // $stmt->bindParam(':id', $id);

    // $id = 1;
    // $stmt->execute();
    // echo "success";

    $stmt = $conn->prepare("SELECT id, name, password FROM Users");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $rows) {
        echo $rows['id'] . " " . $rows['name'] . $rows['password'];
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
