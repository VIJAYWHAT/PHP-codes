<html>
   <body>
   <head>
    <title>
        if_elseif_else
    </title>
    <h2>if_elseif_else</h2>
   </head>
   <h3>Weekend day : </h3>
      <?php
         $d = date("D");//automatically get the today 
         
         if ($d == "Fri")
            echo "Have a nice weekend!"; 

        elseif ($d == "Sat")
            echo "Today is saturday!";

        elseif ($d == "Sun")
            echo "Enjoy the Sunday!";
         
         else
            echo "Have a nice day!"; 
      ?>
   
   </body>
</html>