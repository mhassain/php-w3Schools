<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting</title>
</head>
<body>
    <h2>The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.</h2>

    <h2>PHP - Sort Functions For Arrays</h2>
    <ol>
        <li><b>sort()</b> - sort arrays in ascending order</li>
        <li><b>rsort()</b> - sort arrays in descending order</li>
        <li><b>asort()</b> - sort associative arrays in ascending order, according to the value</li>
        <li><b>ksort()</b> - sort associative arrays in ascending order, according to the key</li>
        <li><b>arsort()</b> - sort associative arrays in descending order, according to the value</li>
        <li><b>krsort()</b> - sort associative arrays in descending order, according to the key</li>
    </ol>

    <h2>Sort Array in Ascending Order - sort()</h2>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);

        $carLength = count($cars);

        for($x = 0; $x < $carLength; $x++){
            echo "<li>$cars[$x]</li>";
        }
    ?>

    <h2>Sort Array in Descending Order - rsort()</h2>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);

        foreach($cars as $car){
            echo "<li>$car</li>";
        }
    ?>

    <h2>Sort Array (Ascending Order), According to Value - asort()</h2>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);

        foreach($age as $old){
            echo "<li>$old</li>";
        }
    ?>

    <h2>Sort Array (Ascending Order), According to Key - ksort()</h2>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        ksort($age);

        foreach($age as $key => $old){
            echo "key =  ".$key . ", Value = ".$old;
            echo "<br>";
        }
    ?>

    <h2>Sort Array (Descending Order), According to Value - arsort()</h2>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        arsort($age);

        foreach($age as $key => $old){
            echo "key =  ".$key . ", Value = ".$old;
            echo "<br>";
        }
    ?>

    <h2>Sort Array (Descending Order), According to Key - krsort()</h2>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        krsort($age);

        foreach($age as $key => $old){
            echo "key =  ".$key . ", Value = ".$old;
            echo "<br>";
        }
    ?>
</body>
</html>