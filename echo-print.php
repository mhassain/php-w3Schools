<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo/Print</title>
</head>
<body>
    <h1>PHP echo and print Statements</h1>
    <ul>
        <li> <b>echo</b> has no return value while <b>print</b> has a return value of 1 so it can be used in expressions.</li>
        <li> <b>echo</b> can take multiple parameters (although such usage is rare) while <b>print</b> can take one argument. </li>
        <li> <b>echo</b> is marginally faster than <b>print.</b> </li>
    </ul>
</body>
</html>


<?php

// Display Text //
echo "<h2>Hello World</h2>";
echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";

// Display Variable //

$txt1 = "Learn PHP";

$txt2 = "W3Schools.com";

echo "<h2>".$txt1."</h2>";
echo "Study PHP at " .$txt2 ."<br>";


// Display Text //
print "<h2> PHP is Fun! </h2> <br>";
print "I'm about to learn PHP <br>";


// Display Variable //
$txt3 = "Learning PHP ";
$txt4 = "W3Schools.com";

print " I am ".$txt3."from ".$txt4;

