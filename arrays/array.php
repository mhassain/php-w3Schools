<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>An array stores multiple values in one single variable:</h1>

    <?php
        $cars = array("volvo", "BMW", "Toyota");
        echo "I like ".$cars[0];
    ?>

    <h2>In PHP, there are three types of arrays:</h2>
    <ol>
        <li>Indexed arrays - Arrays with a numeric index</li>
        <li>Associative arrays - Arrays with named keys</li>
        <li>Multidimensional arrays - Arrays containing one or more arrays</li>
    </ol>

    <h2>Get The Length of an Array - The count() Function</h2>
    <?php
         $cars = array("volvo", "BMW", "Toyota");
         echo count($cars);
    ?>
</body>
</html>