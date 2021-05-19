<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <h1>PHP While Loop</h1>

    <?php
        $x = 1; 

        while($x <= 5){
            echo "The Number is: $x <br>";
            $x++;
        }

        echo "=============== <br>";
        $y = 0; 

        while($y <= 100){
            echo "The number is: $y <br>";
            $y+=10;
        }

    ?>
</body>
</html>