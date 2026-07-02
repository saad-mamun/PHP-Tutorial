<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practice.php" method="post" >
        <input type="text" name="username" placeholder="Enter your name" ><br>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="number" name="age" placeholder="Enter your age"><br> 
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>
<?php

if(isset($_POST['login'])){
    $username =$_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    echo "Hello {$username} <br> Email: {$email} <br>  Age: {$age} ";
}