<?php  
    $business = [
    [
        "name" => "Toyota",
        "catagory" => "car service",
        "location" => "A.A",
    ],

    [
        "name" => "startbucks",
        "catagory" => "coffee",
        "location" => "A.A",
    ],

    [
        "name" => "sunshine",
        "catagory" => "art",
        "location" => "A.A",
    ]

    ]
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
        foreach($business as $bus){
            echo "<div>".
            'Name: ' . $bus['name'] .  '<br>'. 'Category: ' . $bus['catagory'] .  '<br>'.  'Location: ' . $bus['location'] .  '<br>'.  '<br>' 
            ."</div>";
        }
    ?>

    
    
</body>
</html>
