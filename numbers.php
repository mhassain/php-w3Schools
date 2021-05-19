<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <h2>PHP Integer</h2>
    <?php
        $x = 5985;
        var_dump(is_int($x));

        echo('<br>');

        $y = 59.85;
        var_dump(is_int($y));

    ?>
    <h2>PHP Float</h2>
    <p>The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.</p>

    <?php
        $z = 10.365;
        var_dump(is_float($z));
    ?>
    
    <h2>PHP Infinity</h2>
    <p>A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.</p>
    <?php
        $f = 1.9e411;
        var_dump($f);
    ?>

    <h2>PHP Not a Number</h2>
    <p>NaN is used for impossible mathematical operations.</p>
    <?php
        $s = acos(8);
        var_dump($s);

        echo "<br>";
    ?>

    <h2>PHP Numerical</h2>
    <?php
        $m = 5958;
        var_dump(is_numeric($m));

        echo "<br>";

        $n = "5958";
        var_dump(is_numeric($n));

        echo "<br>";

        $o = "59.85" + 100;
        var_dump(is_numeric($o));

        echo "<br>";

        $p = "hello";
        var_dump(is_numeric($p));
    ?>
</body>
</html>