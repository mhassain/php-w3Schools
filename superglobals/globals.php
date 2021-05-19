<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globals</title>
</head>
<body>
    <h4>$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).</h4>
    <h4>PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</h4>

    <?php
        $x = 75;
        $y = 25;

        function addition(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addition();
        echo $z;    

    ?>
    
</body>
</html>