
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize / Validate</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="number" name="age" placeholder="Enter age"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    // echo "Hello {$username} <br>";
    // echo "Email: {$email}";

    //sanitizeing data
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    // echo "Hello {$username} <br>";
    // echo "Email: {$email} <br>";
    // echo "Age: {$age} <br>";

    //validate
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

  if(empty($age)){
    echo "This is not a valid age";
  }else{
    echo "You are {$age} years old";
  }



}

?>