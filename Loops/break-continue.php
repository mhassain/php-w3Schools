<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break-Continue Loop</title>
</head>
<body>
    <h1>PHP Break-Continue Loop</h1>
    <p>You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.</p>
    <p>The break statement can also be used to jump out of a loop.</p>

    <?php
        for($x = 0; $x < 10; $x++){
            if($x == 4){
                break;
            }
            echo "The number is: $x <br>";
        };
    ?>

    <h1>PHP Continue Loop</h1>
    <?php
        for($x = 0; $x < 10; $x++){
            if($x == 4){
                continue;
            }
            echo "The number is: $x <br>";
        }
    ?>

</body>
</html>