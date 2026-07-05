<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practice.php" method="post">
        <input type="text" name="username" placeholder="Enter your username"><br>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="number" name="age" placeholder="Enter your age"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php


if(isset($_POST['submit'])){

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

if(empty($age)){
    echo "Please enter a valid age.";
}

};