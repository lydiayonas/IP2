<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "aastu_lab";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if ($conn) {
        echo "Connected Successfully!<br>";
    }
} catch (mysqli_sql_exception) {
    echo mysqli_connect_error();
}

$data = [
    ["name" => "Henok", "email" => "henok@gmail.com"],
    ["name" => "Helen", "email" => "helen@gmail.com"]
];

foreach ($data as $person) {
    $sql = "INSERT INTO Users (name, email) VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $person["name"], $person["email"]);
        mysqli_stmt_execute($stmt);
    } else {
        echo "Can't create prepared statement";
    }

    mysqli_stmt_close($stmt);
}


// if (mysqli_query($conn, $sql)) {
//     echo "Table Created Successfully<br>";
// } else {
//     echo "Can't Create Table" . mysqli_error($conn);
// }

$sql2 = "SELECT * FROM Users";
$result = mysqli_query($conn, $sql2);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No Results Found!";
}

mysqli_close($conn);
