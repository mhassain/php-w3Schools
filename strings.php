<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>PHP String Functions</h1>

    <h2> <u>strlen() - Return the Length of a String</u> </h2>
    <?php
        echo strlen("Hello World");
    ?>

    <h2> <u>str_word_count() - Count Words in a String</u> </h2>
    <?php
        echo str_word_count("Hello World from Mars");
    ?>

    <h2> <u>strrev() - Reverse a String</u> </h2>
    <?php
        echo strrev("hello world");
    ?>

    <h2> <u>strpos() - Search For a Text Within a String</u> </h2>
    <?php
       echo strpos("Hello world", "world");
    ?>

    <h2> <u>str_replace() - Replace Text Within a String</u> </h2>
    <?php
        echo str_replace("World", "Dolly", "Hello World");

    ?>

</body>
</html>