<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_function</title>
    <style>
       div{
        line-height: 40px;
       }
    </style>
</head>
<body>
 
   <div>
   <?php

    
    //basic function
function Hello() {
  echo "Hello world!";
}

Hello(); // call the function

// argument Function
function familyName($fname) { //set the function
    echo "$fname Raja.<br>"; // set function how its print //first name given name ("...") print
                                                        //then set name ..raja..
  }
  
  familyName("");
  familyName("Saratha");
  familyName("Gopinath");
  familyName("Vijay");

//   function with year

    function Student($sname, $year) {
    echo "student name is $sname. Born in $year <br>";
  }
  
  Student("vijay", "2005");
  Student("ashraf", "2005");
  Student("goushik", "2006");

 // operation in function
// function addNumbers(int $a, int $b) {
//    return $a + $b;
//   }
//   echo addNumbers(5, "5days");
//   // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


//     // PHP Default Argument Value
    //declare(strict_types=1); // strict requirement
    function setHeight(int $minheight = 50) {
      echo "The height is : $minheight <br>";
    }
    
    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);


    // function returings values

//declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//PHP Return Type Declarations

// declare(strict_types=1); // strict requirement //here use the strict its throw all error because 52 error
function numaddition(float $c, float $d) : float { //here use int output comes 6
  return $c + $d;
}
echo numaddition(1.2, 5.2); //output 6.4


function addnum(float $e, float $f) : int {
    return (int)($e + $f);
  }
  echo addnum(1.2, 5.2) . "<br>"; //output 6 //float but the declaration is int so output comes 6

//   Passing Arguments by Reference
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num) ;
  echo $num . "<br>"; //output 7

  echo sum(25,16) . "<br>";

  echo familyName("hari");
 
    ?>
    </div>
</body>
</html>