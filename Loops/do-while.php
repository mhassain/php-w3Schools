<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop</title>
</head>
<body>
    <h1>PHP Do While Loop</h1>

    <?php
        $x =1; 

        do{
            echo "The number is: $x <br>";
            $x++;
        }while($x <= 5);

    ?>
    

    <?php
        $str = "In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.";
        echo wordwrap($str, 100, "<br>\n");

        echo "<br>";
        
        
        
        $x = 6;

        do{
            echo "The number is: $x <br>";
            $x++;
        }while($x <= 5);
    ?>
</body>
</html>