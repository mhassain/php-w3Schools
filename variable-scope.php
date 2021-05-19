<?php

$x =5; //global scope

function myTest(){
    //using x inside this function will generate an error
    //echo "<p> Variable x inside function is: $x </p>";
}
//myText();

echo "<p>Variable x outside function is: $x</p>";


function myFunc(){
    $x = 10; //local scope
    echo "<p>Variable x inside function is: $x";
}

myFunc();

//global keyword //
echo "<p>The global keyword is used to access a global variable from within a function.</p>";

$y = 10;

function test(){
    global $x, $y, $z;
    $z = $x + $y;
}

test();
echo $z ,"<br>";


//GLOBALS Array //
function aFunc(){
    $GLOBALS ['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

aFunc();
echo $z;


