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


     $name = array_column($business, 'name');
     $uniqueNames = array_unique($name);

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
foreach($uniqueNames as $name){
   echo $name;
}
?>   
</body>
</html>
