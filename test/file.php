<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir = "uploads/";
    $allowedTypes = ["image/jpeg", "image/png", "image/gif"];
    $allowedSize = 2 * 1024 * 1024;

    for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $_FILES['file']['tmp_name'][$i]);

        if (!in_array($mimeType, $allowedTypes)) {
            echo "Potentially dangerous file";
            exit;
        }

        finfo_close($finfo);

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $uploadFile = $uploadDir . uniqid() . "_" . basename($_FILES["file"]["name"][$i]);

        if (!in_array($_FILES["file"]["type"][$i], $allowedTypes)) {
            echo "Format not acceptable";
            exit;
        }

        if ($_FILES["file"]["size"][$i] > $allowedSize) {
            echo "size should not exceed 2 mb";
            exit;
        }

        if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $uploadFile)) {
            echo "file uploaded";
        } else {
            echo "didn't work";
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
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple />
        <input type="submit" />
    </form>
</body>

</html>