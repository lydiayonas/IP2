<?php
$businesses = [
    ["name" => "Kaldis", "category" => "Food", "location" => "Addis"],
    ["name" => "Aastu", "category" => "Education", "location" => "Sheger"],
    ["name" => "Sami", "category" => "Food", "location" => "Addis"],
];

function updateBusiness($key, $value, $index)
{
    global $businesses;
    $businesses[$index][$key] = $value;
}

updateBusiness('category', "Food", 1);

$grouped = [];

foreach ($businesses as $business) {
    if (!isset($grouped[$business['location']])) {
        $grouped[$business['location']] = [];
    }

    $grouped[$business['location']][] = $business;
}

foreach ($grouped as $key => $value) {
    echo "City: " . $key . '<br />';
    foreach ($value as $business) {
        echo "<p>" . $business['name'] . " " . $business['category'] . "</p>";
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

</body>

</html>