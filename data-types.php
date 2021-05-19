<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <h1>PHP Data Types:</h1>
    <ol>
        <li>String</li>
        <li>Integer</li>
        <li>Float/Double</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resource</li>
    </ol>
    <h2> <u>PHP String:</u> </h2>

    <?php
    
        $x = "Hello World! <br>";
        echo $x;
        var_dump($x);
    ?>

    <h2> <u>PHP Integer:</u> </h2>

    <?php
        $x = 494940;
        echo $x;
        echo "<br>";
        var_dump($x);
    ?>


    <h2> <u>PHP Float/Double:</u> </h2>

    <?php
        $x = 10.378;
        echo $x;
        echo "<br>";
        var_dump($x);
    ?>

     <h2> <u>PHP Boolean:</u> </h2>

     <?php
        $b = true;
        $c = false;

        echo $b;
        echo "<br>";

        echo $c;
        echo "<br>";

        var_dump($b);
        echo "<br>";
        var_dump($c);
     ?>

     <h2> <u>PHP Array:</u> </h2>
     <?php
        $cars = array("Volvo", "BMW", "Toyota");
        //echo $cars;
        echo "<br>";
        var_dump($cars);
     ?>
    
    <h2> <u>PHP Object:</u> </h2>
    <?php
        class Car{
            public $color; 
            public $model;

            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return "My car is a ".$this->color." ".$this->model;
            }
        }

        $myCar = new Car("Black", "Volvo");
        echo $myCar->message();
        echo "<br>";

        $myAnotherCar = new Car("Red", "Toyota");
        echo $myAnotherCar->message();
    ?>

    <h2> <u>PHP NULL:</u> </h2>
    <?php
        $n = "Hello World";
        $n = Null;
        var_dump($n);
    ?>

    <h2> <u>PHP Resource:</u> </h2>
    <p>The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.</p>

</body>
</html>