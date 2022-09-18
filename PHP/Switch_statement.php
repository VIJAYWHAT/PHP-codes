<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch_statement</title>
</head>
<h2>check the day with Switch_statement</h2>
<body>
<html>
   <body>
      
      <?php
         $d = date("D");
         
         switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "Wonder which day is this ?";
         }
      ?>
      
   </body>
</html>
</body>
</html>