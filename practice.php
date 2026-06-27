<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In</title>
</head>

<body>

     <form action="practice.php" method="post">
          <label>Username:</label><br />
          <input type="text" name="username" placeholder="Enter your name"><br />
          <label>Password:</label><br />
          <input type="password" name="password" placeholder="Enter your password"><br />
          <label>Age:</label><br />
          <input type="number" name="age" placeholder="Enter your age"><br /><br />
          <input type="submit" name="submit" value="Login">
     </form>


</body>

</html>

<?php

if(isset($_POST['submit'])){
     if( !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['age']) ){
          $username = $_POST['username'];
          $password = $_POST['password'];
          $age = $_POST['age'];
          echo "You are {$username} and you {$age} years old.<br>  Your pass: {$password}";
          
     }else{
          echo "__Please fill up all field";
     }
}


?>