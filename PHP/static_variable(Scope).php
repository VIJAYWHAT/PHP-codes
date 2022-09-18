<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static_Scope</title>
</head>
<body>
<?php
   function output() {
      STATIC $num = 0;
      $num++;                                                                                                                                                                                                                                                                                                                       
      print $num;
      print "<br />";
   }
   
   output();
   output();
   output();
?>    

</body>
</html>