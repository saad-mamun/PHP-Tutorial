<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="index.php" method="post">
    <label>x:</label>
    <input type="text" name="x" >
    <label>y:</label>
    <input type="text" name="y" >
    <label>z:</label>
    <input type="text" name="z" >
    <input type="submit" value="total">
</form>
</body>

</html>

<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

$total = null;

//$total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);   //square root function

// $total = pow($x, $y);   //power function
// $total = max($x, $y, $z);   //max function
// $total = min($x, $y, $z);   //min function
// $total = pi();   //pi function
// $total = rand(100,6000);   //random function


echo $total;

?>