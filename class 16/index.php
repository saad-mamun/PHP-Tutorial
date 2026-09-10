<?php
// function happy_birthday(){
//     echo "Happy Birthday! <br>";
//     echo "Happy Birthday to you! <br>";
//     echo "Happy Birthday to my dear friend! <br>";
//     echo "Happy Birthday! <br>";
// }
// happy_birthday();



// parameter 
function happy_birthday($first_name, $age){
    echo "Happy birthday $first_name! <br>";
    echo "Happy birthday to $first_name! <br> <br>";
    echo "Happy birthday to my Dear friend $first_name! <br>";
    echo "Happy birthday $first_name! <br>";
    echo "You are now $age! <br> <br>";
}

happy_birthday("Md_Mamun ", 22);
happy_birthday("Naima", 23);



function sum($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}
$total = sum(10, 20);
echo "Total sum is: $total <br>";



?>