<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi-demensional array PHP</title>
    <style>
        div{
            line-height: 40px;
        }
    </style>
</head>
<body>
    <div>
<?php
         $marks = array( 
            "vj" => array (
               "physics" => 84,
               "maths" => 96,	
               "chemistry" => 82
            ),
            
            "ashraf" => array (
               "physics" => 69,
               "maths" => 72,
               "chemistry" => 48
            ),
            
            "goushik" => array (
               "physics" => 54,
               "maths" => 62,
               "chemistry" => 57
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for vj in physics : " ;
         echo $marks['vj']['physics'] . "<br />"; 
         
         echo "Marks for ashraf in maths : ";
         echo $marks['ashraf']['maths'] . "<br>"; 
         
         echo "Marks for goushik in chemistry : " ;
         echo $marks['goushik']['chemistry'] . "<br />"; 
      ?>
      </div>
</body>
</html>