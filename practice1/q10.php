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

   $searchName = "Toyota";
   $find = false;
     

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

    foreach($business as $biz){
       if(in_array($searchName,$biz )){
         $find = true;
         break;
       } 
    }

    if($find){
        echo "$searchName found";
    }else{
        echo "not found";
    }

?>   
</body>
</html>
