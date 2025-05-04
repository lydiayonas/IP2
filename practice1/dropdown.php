<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  id="php_form">
        <fieldset>
            <label name="color">Pick a color: </label>
            <select name="color">
                <?php
                $array = ["grey", "pink", "blue"];
                    foreach($array as $arr){
                    echo "<option value='$arr'>$arr</option>";

                    }
                ?>
            </select>
        </fieldset>
    </form>

</body>
</html>
