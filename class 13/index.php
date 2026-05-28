<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username"><br/>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Log In">    
    </form>
</body>
</html>




<?php
// isset();
// empty();


$username = null; // empty
// echo isset($username); // true


if(isset($username)){
    // echo "Username is set";
}else{
    // echo "Username is NOT set";
};


if(empty($username)){
    // echo "Username is empty";   
}else{
    // echo "Username is NOT empty";
};



// for form
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "Username and password cannot be empty";
    }else{
        echo "Username: " . $username . "<br/>";
        echo "Password: " . $password;
    }

}else{
    echo "Please fill in the form"; 
}



?>