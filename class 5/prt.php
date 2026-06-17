<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "prt.php" method="post" >
        <label>X:</label>
        <input type="number" name= "x">
        <label>Y:</label>
        <input type="number" name= "y">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
 
$x = $_POST["x"];
$y = $_POST["y"];

$total = null;

$total = rand(30,40);
echo $total;

?>