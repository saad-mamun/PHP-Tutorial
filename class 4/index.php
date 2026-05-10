<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get And Post</title>
</head>

<body>
    <!-- <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <button type="submit">Login</button>
    </form> -->




<!-- form 2 -->
    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <button type="submit" value="total">Submit to Calculate Total</button>
    </form>
</body>

</html>

<?php
// echo "{$_GET["username"]} <br>";
// echo "{$_GET["password"]} <br>";

// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";



// form 2
$item = "Pizza";
$price = 4.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $price * $quantity;
echo "You ordered $quantity $item(s) <br>";
echo "Total: $$total";


?>  