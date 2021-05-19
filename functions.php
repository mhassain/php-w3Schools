<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>PHP Functions</h1>
    <p>PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.</p>

    <?php
       function writeMsg(){
           echo "Hello World!";
       }

       writeMsg();

    ?>

    <h1>PHP Function Arguments</h1>
    <p>Information can be passed to functions through arguments. An argument is just like a variable.</p>

    <?php
        function familyName($fname){
            echo $fname."<br>";
        };

        familyName("Khan");
        familyName("Chowdhury");
        familyName("Patwary");
        familyName("Molla");

    ?>

    <h1>PHP Functions - Returning values</h1>
    <?php
        function sum(int $x, int $y):int {
            $z = $x + $y;
            return $z;
        };

        echo "5 + 10 = ".sum(5, 10)."<br>";
        echo "7 + 5 = ".sum(7, 5)."<br>";
        echo "8 + 5 = ".sum(8, 5)."<br>";
        echo "13 + 11 = ".sum(13, 11)."<br>";
    ?>
</body>
</html>