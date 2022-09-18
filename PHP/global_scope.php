<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global_scope</title>
    <style>
        div{
            line-height: 40px;
        }
    </style>
</head>
<body>
    <div>
<?php
   $num = 15;
   
   function myTest() {
      GLOBAL $num;
      $num++;
      
      print "num is $num";
   }
   
   myTest();
   echo "<br>";
   myTest();
   echo "<br>";
   myTest();
?>
</div>
</body>
</html>