<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>

    <style>
        table tr td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>PHP Multidimensional Arrays</h1>
    <p>A multidimensional array is an array containing one or more arrays.</p>

    <?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
            );

        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>

    <p>We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):</p>
    
    <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Stock</td>
                    <td>Sold</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            $cars = array (
                                array("Volvo",22,18),
                                array("BMW",15,13),
                                array("Saab",5,2),
                                array("Land Rover",17,15)
                            );
                                
                            echo $cars[0][0];
                            ?>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <?php
                            $cars = array (
                                array("Volvo",22,18),
                                array("BMW",15,13),
                                array("Saab",5,2),
                                array("Land Rover",17,15)
                            );
                                
                            echo $cars[1][0];
                            ?>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <?php
                            $cars = array (
                                array("Volvo",22,18),
                                array("BMW",15,13),
                                array("Saab",5,2),
                                array("Land Rover",17,15)
                            );
                                
                            echo $cars[2][0];
                            ?>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <?php
                            $cars = array (
                                array("Volvo",22,18),
                                array("BMW",15,13),
                                array("Saab",5,2),
                                array("Land Rover",17,15)
                            );
                                
                            echo $cars[3][0];
                            ?>
                    </td>
                </tr>
            </tbody>
    </table>

</body>
</html>