<?php

echo "<h1> Task 2 </h1>";
echo "<h4> Odd Even Number </h4>";


function oddEven( $number){
    if($number %2 == 0){
        echo " The number is Even ".$number." ";
    }

    else{
        echo "The number is Odd ".$number." ";
    }
}

$number =50;
oddEven($number);

?>