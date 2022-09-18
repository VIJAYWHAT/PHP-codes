<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative array</title>
</head>
<body>
<html>
   <body>
      
      <?php
         /* First method to associate create array. */
         $salaries = array("vj" => 20000, "gopi" => 10000, "zara" => 500);
         
         echo "Salary of vj is ". $salaries['vj'] . "<br />";
         echo "Salary of gopi is ".  $salaries['gopi']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
         
         /* Second method to create array. */
         $salaries['vj'] = "high";  
         $salaries['gopi'] = "medium";
         $salaries['zara'] = "low";
         
         echo "Salary of vj is ". $salaries['vj'] . "<br />";
         echo "Salary of gopi is ".  $salaries['gopi']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
      ?>
   
   </body>
</html>
</body>
</html>