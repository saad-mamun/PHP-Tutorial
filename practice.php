<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In</title>
</head>

<body>
     <form action="practice.php" method="post">
          <label>Username: </label><br>
          <input type="text" name="username" placeholder="Username" ><br>
          <label>Password: </label><br>
          <input type="password" name="password" placeholder="Password" ><br>
          <input type="submit" value="Login" >
     </form>
</body>

</html>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){
     $password = $_POST['password'];
     $username = $_POST['username'];

     if(!empty($username) || !empty($password)){
          echo "Username Is: " . $username . "<br>";
          echo "Password Is: " . $password . "<br>";
     }else{
          echo "Username and Password Can Not be Empty";
     }
}else{
     echo "Fill in the form";
}

?>