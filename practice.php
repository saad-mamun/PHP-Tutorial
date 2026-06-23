<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="practice.php" method="post" >
    <label>Enter a Number:</label><br/>
    <input type="number" name="number"><br/>
    <input type="submit" value="Submit"> 
</form>
    
</body>
</html>




<?php

$counter = $_POST['number'];
for($i = 0; $i <= $counter; $i++){
    echo $i . "<br>";
}




