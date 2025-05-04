<?php
$business = [
    [
        "name" => "Toyota",
        "catagory" => "car service",
        "location" => "A.A",
    ],

    [
        "name" => "Toyota",
        "catagory" => "coffee",
        "location" => "California",
    ],

    [
        "name" => "Sunshine",
        "catagory" => "housing service",
        "location" => "A.A",
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    ?>

    <ul>
        <?php
        foreach ($business_by_city as $bus) {
            foreach ($bus as $key => $value) {
                echo (
                    "<ul>
                        <li>$key</li>
                        <ul><li>$value</li></ul>
                    </ul>"
                );
            }
        }
        ?>
    </ul>
</body>

</html>