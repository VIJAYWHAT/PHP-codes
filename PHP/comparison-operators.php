<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison operator</title>
    <!--internal css-->
    
    <style>
        .line-height{
            line-height: 40px;
        }
        
    </style>
</head>
<body>
    <h2>comparison operator</h2>
    <div class="line-height">
     
        <?php
            $a = 20;
            $b = 10;

        if($a == $b) {
            echo "Test1 : a is equal to b <br>";
        }else{
            echo "Test1 : a is not equal to b <br>";
        }

        if($a < $b) {
            echo "Test2 : a is less than b <br>";
        }else{
            echo "Test2 : a is not less than b <br>";
        }

     if( $a < $b ) {
        echo "TEST3 : a is less than  b<br/>";
     }else {
        echo "TEST3 : a is not less than b<br/>";
     }
  
     if( $a != $b ) {
        echo "TEST4 : a is not equal to b<br/>";
     }else {
        echo "TEST4 : a is equal to b<br/>";
     }
  
     if( $a >= $b ) {
        echo "TEST5 : a is either greater than or equal to b<br/>";
     }else {
        echo "TEST5 : a is neither greater than nor equal to b<br/>";
     }
  
     if( $a <= $b ) {
        echo "TEST6 : a is either less than or equal to b<br/>";
     }else {
        echo "TEST6 : a is neither less than nor equal to b<br/>";
     }

?>
 </div>

</body>
</html>