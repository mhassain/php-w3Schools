<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
</head>
<body>
    <h1>PHP foreach Loop</h1>
    <p>The foreach loop - Loops through a block of code for each element in an array.</p>


    <?php
        $colors =  array("red", "green", "blue", "yellow");

        foreach($colors as $value){
            echo " $value  <br>";
        };

    ?>

    <p>The following example will output both the keys and the values of the given array ($age):</p>

    <?php
        $age = array("Peter" => "35", "Ben" => "33", "Joe" => "43");

        foreach($age as $x => $val){
            echo "$x = $val <br>";
        };
    ?>
</body>
</html>