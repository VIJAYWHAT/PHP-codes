<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>function_parameter</title>
</head>
<body>
<h2>function parameter</h2>

<?php

function multiply ($num) { //assume the multiply in function
    $num = $num * 10 ; //give the function
    return $num; 
}

$retval = multiply (50); //set the value
    print "Return num is $retval \n ";


    

?>

</body>
</html>