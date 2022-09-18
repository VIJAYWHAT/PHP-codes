<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>local_scope</title>
    <style>
        div {
            line-height: 40px;
        }
    </style>

</head>

<h2>Local_Scope</h2>
<body>
    <div>
<?php
   $x = 4; //global scope value
   
   function num () { 
      $x = 0; //local scope value
      print "inside is $x. <br />";
   }
   
   num();
   print " outside is $x. <br />";
?>
</div>
</body>
</html>

