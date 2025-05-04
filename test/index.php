<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
    $password = htmlspecialchars($_POST["password"]);

    $errors = [];

    if (empty($name) || empty($email) || empty($age) || empty($password)) {
        $errors[] = "Input all fileds";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid type for email";
    }

    if (!is_numeric($age)) {
        $errors[] = "Age should be a number";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must contain atleast 8 characters";
    }

    if (empty($errors)) {
        echo "Registered successfully";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br/>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Name: <input type="text" name="name" />
        Email: <input type="text" name="email" />
        Age: <input type="text" name="age" />
        Password: <input type="password" name="password" />
        <input type="submit" />
    </form>
</body>

</html>