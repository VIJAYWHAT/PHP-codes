<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pyramid</title>
</head>
<body>
    <?php
    $n = 5;

    for($i = 1 ;$i<=$n;$i++){
        echo "<br>";
        for($j=1;$j<=$i ;$j++){
            $print++;
            print $print ;
        }
        
        echo "<br>";
    }

    

    ?>
</body>
</html>