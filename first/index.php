<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is <?php echo "<span style='color:green'>Header</span>" ?></h1>
    <?php
        // $name = "Mekdi";
        // $age = 20;
        // $globalvar = "KERI is global";
        // define("GENDER", "Female");

        // function getStudent($id = 0) {
        //     if ($id > 0) {
        //         echo "data for student " . $id . "<br>";
        //     } else {
        //         echo "all data" . "<br>";
        //     }

        //     global $name;
        //     echo $name."<br>";

        //     echo $GLOBALS['globalvar'] . "<br>";
        // }

        // getStudent(4);

        // function staticCount() {
        //     static $count = 0;
        //     $count++;

        //     echo $count . "<br>";
        // }

        // staticCount();
        // staticCount();
        // staticCount();

        // $cars = ["Tesla", "Buggatti", "BMW", "Ferrari"];


        // echo "<br>For Loop<br>";
        // for ($i = 0; $i < count($cars); $i++) {
        //     echo $cars[$i] . "<br>";
        // }

        // echo "<br>For Each Loop<br>";
        // foreach($cars as $car) {
        //     echo $car . "<br>";
        // }

        // echo "<br>While Loop<br>";
        // $i = 0;
        // while ($i < count($cars)) {
        //     echo $cars[$i] . "<br>";
        //     $i++;
        // }

        // echo "<br>Do While Loop<br>";
        // $i = 0;
        // do {
        //     echo $cars[$i] . "<br>";
        //     $i++;
        // } while ($i < count($cars));

        // # arrays

        // $car1 = [
        //     "brand" => "Tesla",
        //     "model" => "ModelX",
        //     "year" => "2024",
        // ];

        // foreach ($car1 as $key => $value) {
        //     echo "$key: $value <br>";
        // }

        // $cars2 = [
        //     [
        //         "brand" => "Tesla",
        //         "model" => "ModelX",
        //         "year" => "2024",
        //     ],
        //     [
        //         "brand" => "Bugatti",
        //         "model" => "ModelY",
        //         "year" => "2025",
        //     ],
        // ];

        // var_dump($cars2);

        $directory = [
            ["Name" => "Cafe", "Category" => "Restaurant", "Location" => "Downtown"],
            ["Name" => "Tech Solutions", "Category" => "IT Services", "Location" => "Uptown"],
            ["Name" => "Green Market", "Category" => "Grocery", "Location" => "Suburb"],
        ]
        
    ?>

    <table border="1">
        <thead>
                <?php 
                    echo date("Y-m-d H:I:s");
                    foreach ($directory[0] as $key => $value) {
                    echo "<th>$key</th>";
                    }
                ?>
        </thead>
        <tbody>
            <tr>
            <?php 
                function tableCell($business) {
                    foreach ($business as $key => $value) {
                        echo "<td>$value</td>";
                    }
                }
                foreach ($directory as $business) {
                    echo "<tr>" . tableCell($business) . "</tr>";
                }
            ?>
            </tr>
        </tbody>
    </table>
</body>
</html>