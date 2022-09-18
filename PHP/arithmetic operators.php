<html>
   
   <head>
      <title>Arithmetical Operators</title>
      <style>
        
        div{
            line-height: 40px;
        }
      </style>
   </head>
   
   <body>


   <h2>Arithmetic_Operators</h2>
   <div>
    
      <?php
         $a = 20;
         $b = 10;
         
         echo "values is 20, 10 <br>";

         $c = $a + $b;
         echo "Addition Operation Result: $c <br/>";
         
         $c = $a - $b;
         echo "Substraction Operation Result: $c <br/>";
         
         $c = $a * $b;
         echo "Multiplication Operation Result: $c <br/>";
         
         $c = $a / $b;
         echo "Division Operation Result: $c <br/>";
         
         $c = $a % $b;
         echo "Modulus Operation Result: $c <br/>";
         
         $c = $a++; 
         echo "Increment Operation Result: $c <br/>";
         
         $c = $a--; 
         echo "Decrement Operation Result: $c <br/>";
      ?>
   </div>
   
   </body>
</html>