<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_Problems</title>
</head>
<body>
    <?php
    echo "solution for 1st problem";
    echo "<br>";
    $a = array(0,1,2,3,4 );

    echo $a[3];

    echo "<br>";
    echo "<br>";
    echo "solution for 2nd problem";
    echo "<br>";


    $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );

    echo $a['three'];

    echo "<br>";
    echo "<br>";
    echo "solution for 3rd problem";
    echo "<br>";
    

    $a = array(
        array(0,1),
        array(2,array(3))
    );

    echo $a[1][1][0];
    
    echo "<br>";
    echo "<br>";
    echo "solution for 4th problem";
    echo "<br>";
 
    
    $a = array(
        "a"=>array(
            "b"=>0,
            "c"=>1
        ),
        "b"=>array(
            "e"=>2,
            "o"=>array(
                "b"=>3
            )
        )
    );
    
    echo $a['b']['o']['b'];

    echo "<br>";
    echo "<br>";
    echo "solution for 5th problem";
    echo "<br>";
   

    $a = "a,b,c,d,e,f";
    print_r(explode(",",$a));
    
    echo "<br>";
    echo "<br>";
    echo "solution for 6th problem";
    echo "<br>";
   

    $array = array("a","b","c","d","e");

    $keyasvalue = array_combine($array , $array);

    
    print_r($keyasvalue);
    
    echo "<br>";
    echo "<br>";
    echo "solution for 7th problem";
    echo "<br>";
  

    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    );
    
    $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
    );


       /*$keysandvalues = array(
        $keys['field1'] => $values['field1value'],
        $keys['field2'] => $values['field2value'],
        $keys['field3'] => $values['field3value']

    );*/

   $keys2 = (array_values($keys));
    $values2 = (array_values($values));

    $keysandvalues = array_combine($keys2,$values2);

    print_r($keysandvalues);

      
    echo "<br>";
    echo "<br>";
    echo "solution for 8th problem";
    echo "<br>";


    $transactions = array(
        array(
            "debit"=>2,
            "credit"=>3
        ),
        array(
            "debit"=>15,
            "credit"=>14
        )
    );
    foreach($transactions as $value){
        //print_r($value['debit'] . "<br>");
        //print_r($value['credit'] . "<br>");
        $value2['amount']= $value['credit'] - $value['debit'];
        //echo $value['amount']. "<br>";

       /*$array = array(
            "debit" => $value['debit']."<br>",
            "credit" => $value['credit']."<br>",
            "amount" => $value2['amount']."<br>"
        );*/
        
        print_r(array_merge($value , $value2 ));
       echo "<br>";
       //print_r($array);

    }
    
    

    echo "<br>";
    echo "solution for 9th problem";
    echo "<br>";

    $a = array( 0, 1, 2, 3, 4, 5, 6 );

    print_r(array_sum($a));

    echo "<br>";
    echo "<br>";
    echo "solution for 10th problem";
    echo "<br>";

    $student_one = array("Maths"=>95, "Physics"=>90,  
    "Chemistry"=>96, "English"=>93,  
    "Computer"=>98); 


/* Looping through an array using foreach */
echo "Looping using foreach: \n"; 
foreach ($student_one as $subject => $marks){ 
echo "Student one got ".$marks." in ".$subject."\n"; 

} 

?>
</body>
</html>

