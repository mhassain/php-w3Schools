<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
<h3>Constants are like variables except that once they are defined they cannot be changed or undefined.</h3>

<h2>Create a PHP Constant</h2>
<p>define(name, value, case-insensitive)</p>

<?php
    define("GREETING", "Welcome to School");
    echo GREETING;

    echo "<br>";

    define("hello", "Hello, How are you?", true);
    echo hello;
?>

<h2>PHP Constant Arrays</h2>
<p>In PHP7, you can create an Array constant using the define() function.</p>

<?php
    define("cars",[
        "BMW",
        "Toyota",
        "Mazda"
    ]);
    echo cars[0];
?>
<h2>Constants are Global</h2>

<?php
    define("INTRO", "Hi, I am SAJIB");

    function myName(){
        echo INTRO;
    };

    myName();



?>

</body>
</html>