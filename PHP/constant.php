<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php1</title>
</head>
<body>
    <?php

define("MINSIZE", 50);

echo MINSIZE;
echo "<br>";
echo constant("MINSIZE"); // same thing as the previous line

    ?>
</body>
</html>