<?php
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$allowedSize = 5 * 1024 * 1024;
$allowedType = ["image/png", "image/webp"];
$errors = [];


if ($_FILES["file"]["size"] > $allowedSize) {
    $errors[] = "File size exceeded the limit<br>";
}
if (!in_array($_FILES["file"]["type"], $allowedType)) {
    $errors[] = "Not allowed type";
}

$safeFileName = uniqid() . '_' . basename($_FILES["file"]["name"]);
$uploadFile = $uploadDir . $safeFileName;

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    exit;
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload error";
    }
}
