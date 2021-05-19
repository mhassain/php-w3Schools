<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <h1>Switch Statement</h1>

    <?php
        $favColor = "green";
        switch($favColor){
            case "red":
                echo "Your favorite color is red";
                break;
            case  "blue":
                echo "Your favorite color is blue";
                break;
            case "green":
                echo "Your favorite color is green";
                break;
            default:
            echo "You have no favorite color. ";
        }
    ?>
</body>
</html>