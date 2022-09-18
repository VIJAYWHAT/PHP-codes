<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>car_rate</title>
</head>
<body>
    <?php

      $car = array ("BMW" => array(
        "x5" => 79 ,
        "z4" => 71 ,
        "5 series" => 64
      ),
    

      "benz" => array(
        "a class" => 42,
        "b class" => 55,
        "e class" => 85
      ),

      "audi" => array(
        "Q2" => 35,
        "A4" => 43,
        "A6" => 59

      )

    );
    echo "the audiA4 least rate is :";
    echo $car['audi'] ." lakhs";
    ?>
    
</body>
</html>