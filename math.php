<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <h3>PHP has a set of math functions that allows you to perform mathematical tasks on numbers.</h3>

    <h2>PHP pi() Function</h2>
    <?php
        echo pi();
    ?>

    <h2>PHP min() and max() Functions</h2>
    <p>The min() and max() functions can be used to find the lowest or highest value in a list of arguments:</p>
    <?php
        echo(min(0, 150, 30, 20, -8, -200));
        echo "<br>";
        echo(max(0, 150, 30, 20, -8, -200)); 
    ?>

    <h2>PHP abs() Function</h2>
    <p>The abs() function returns the absolute (positive) value of a number:</p>

    <?php
        echo(abs(-6.7));
    ?>

    <h2>PHP sqrt() Function</h2>
    <p>The sqrt() function returns the square root of a number:</p>
    <?php
        echo(sqrt(64));
    ?>

    <h2>PHP round() Function</h2>
    <p>The round() function rounds a floating-point number to its nearest integer:</p>
    <?php
        echo(round(1.60));
        echo "<br>";
        echo(round(1.49));
    ?>

    <h2>PHP Random Numbers</h2>
    <p>The rand() function generates a random number:</p>
    <?php
        echo(rand());
    ?>
    <p>To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.</p>
    <?php
        echo(rand(10,100));
    ?>
</body>
</html>