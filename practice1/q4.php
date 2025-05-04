<?php  
    $business = [
    [
        "name" => "Toyota",
        "catagory" => "car service",
        "location" => "A.A",
    ],

    [
        "name" => "Starbucks",
        "catagory" => "coffee",
        "location" => "A.A",
    ],

    [
        "name" => "Sunshine",
        "catagory" => "art",
        "location" => "A.A",
    ]
    ];

    $name = array_column($business, 'name');
    array_multisort($name, SORT_ASC, $business);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business List</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        foreach($business as $bus) {
            echo "<tr>
                    <td>".$bus['name']."</td>
                    <td>".$bus['catagory']."</td>
                    <td>".$bus['location']."</td>
                  </tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
