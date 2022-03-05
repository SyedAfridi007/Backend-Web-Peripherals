<?php

echo "<h1> Task 2 </h1>";
echo "<h4> function Demo </h4>";

    function doArithmeticOperation ($num1, $num2){
        $sum = $num1 + $num2;
        echo "Sum of two number $num1 and $num2 is: $sum"."</br>";

        $sub = $num1 - $num2;
        echo "sub of two number $num1 and $num2 is: $sub "."<br>";

        $mul = $num1 * $num2;
        echo "mul of two number $num1 and $num2 is: $mul "."<br>"; 

        $div = $num1 / $num2;
        echo "div of two number $num1 and $num2 is: $div "."<br>";

    }
   echo "output from doArithmeticOperation is: "."</br>";
   echo doArithmeticOperation(num1:5, num2:10);
?>