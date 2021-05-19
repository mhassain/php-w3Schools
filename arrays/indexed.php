<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
<body>
    <h1>PHP Indexed Arrays</h1>

    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <h2>Loop Through an Indexed Array</h2>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        $arraylength = count($cars);

        for($x = 0; $x < $arraylength; $x++){
            echo $cars[$x]."<br>";
        }
        echo "==========Foreach==========<br>";
        foreach($cars as $car){
            echo $car."<br>";
        }
    ?>
</body>
</html>