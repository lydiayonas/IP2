<?php
$businesses = [
    ["name" => "Kaldis", "category" => "Food", "location" => "Addis"],
    ["name" => "Aastu", "category" => "Education", "location" => "Sheger"],
    ["name" => "Sami", "category" => "Food", "location" => "Addis"],
];

$names = array_column($businesses, 'name');

$chunks = array_chunk($businesses, 2);

$business = ["name" => "Aasstu", "category" => "Education", "location" => "Sheger"];
if (!in_array($business, $businesses)) {
    $businesses[] = $business;
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
    <?php
    $filtered = array_filter($businesses, function ($business) {
        return $business["category"] == "Food";
    })
    ?>

    <table>
        <thead>
            <th>Name</th>
            <th>Category</th>
            <th>Location</th>
        </thead>
        <tbody>
            <?php
            foreach ($businesses as $business) {
                echo "<tr><td>" . $business['name'] . "</td>";
                echo "<td>" . $business['category'] . "</td>";
                echo "<td>" . $business['location'] . "</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>