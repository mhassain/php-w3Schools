<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>PHP Associative Arrays</h1>
    <p>Associative arrays are arrays that use named keys that you assign to them.</p>

    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
    ?>

    <h2>Loop Through an Associative Array</h2>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $value){
            echo "key = ". $x . ", Value = " . $value;
            echo "<br>";
        }
    ?>
</body>
</html>