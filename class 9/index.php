<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>
<body>
    <form action="index.php" method= "post" >
        <label>Enter a Number to count down form:</label>
        <input type="text" name= "counter">
        <input type="submit" value= "Start">  
    </form>
    
</body>
</html>




<?php

// 1 er sathe 10 er gunfol print korbe
for($i = 1; $i <= 100; $i += 10){
    // echo $i . "<br>";
}

for($i = 10; $i > 0; $i--){
    // echo $i . "<br>";   

};


$counter = $_POST['counter'];   
for($i = 0; $i <= $counter; $i++){
    echo $i . "<br>";
}



?>