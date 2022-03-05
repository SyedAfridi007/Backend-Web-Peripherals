<?php

echo "<h1> Lab task 1 </h1>";
echo "<h4> array demo </h4>";

$city = array("dhaka", "comilla", "chitagong","rajshahi", "barisal");

for($x=0; $x < count($city); $x++){
    echo "the city @ ".$x." is:".$city[$x]."<br>";
}

?>