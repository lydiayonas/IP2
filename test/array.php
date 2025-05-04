<?php
$businesses = [
    ["name" => "Kaldis", "category" => "Food", "location" => "Addis"],
    ["name" => "Aastu", "category" => "Education", "location" => "Sheger"],
    ["name" => "Sami", "category" => "Food", "location" => "Addis"],
];

// $name = array_column($businesses, "name");
// array_multisort($name, SORT_ASC, $businesses);
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