<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Statements</title>
</head>
<body>
    <h1>PHP - The if Statement</h1>
    <?php
        $t = date("H");

        if($t < "24"){
            echo "Have a good day";
        }else{
            echo "Have a good night";
        }
    ?>
</body>
</html>