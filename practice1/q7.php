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


     $names = array_column($business, 'name');

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
foreach($names as $name){
   echo " <ul>
        <li>$name</li>
    </ul>";
}
?>   
</body>
</html>
