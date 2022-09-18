<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php
    echo "1st problem solution";
    echo "<br>";
    $a = array(0,1,2,3,4 );

    echo $a[3];

    echo "<br>";
    echo "2nd problem solution";
    echo "<br>";
    $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );

    echo $a['three'];

    echo "<br>";
    echo "3rd problem solution";
    echo "<br>";

    $a = array(
        array(0,1),
        array(2,array(3))
    );

    echo $a[1][1][0];
    
    echo "<br>";
    echo "4th problem solution";
    echo "<br>";
    
    $a = array(
        "a"=>array(
            "b"=>0,
            "c"=>1
        ),
        "b"=>array(
            "e"=>2,
            "o"=>array(
                "b"=>3
            )
        )
    );
    echo $a['b']['o']['b'];

    echo "<br>";
    echo "5th problem solution";
    echo "<br>";

    $a = "a, b, c, d, e, f";
    print_r(explode(" ",$a));

    

    

    ?>
</body>
</html>