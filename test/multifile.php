<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'images/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $file = $_FILES['file'];
    $allowedTypes = ['image/png', 'image/jpeg', 'image/gif'];
    $maxSize = 2 * 1024 * 1024;

    for ($i = 0; $i < count($file['name']); $i++) {
        if ($file['size'][$i] > $maxSize) {
            echo "Exceeded size";
            exit;
        }

        if (!in_array($file['type'][$i], $allowedTypes)) {
            echo "not allowed";
            exit;
        }

        $uploadedFile = $uploadDir . uniqid() . '_' . $file['name'][$i];

        if (move_uploaded_file($file['tmp_name'][$i], $uploadedFile)) {
            echo "success";
        } else {
            echo "fail";
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
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple />
        <input type="submit" />
    </form>
</body>

</html>