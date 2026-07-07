<?php
session_start();

if (isset($_POST['login'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: home.php");
    } else {
        echo "Missing username , email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>

<body>
    <div>
        <h1 id="main-logo">Log in to help us!</h1>
    </div>
    <form action="practice.php" method="post">
        <label class="label" for="username">Username:</label>
        <input class="inp" type="text" id="username" name="username"><br><br>
        <label class="label" for="email">Email:</label>
        <input class="inp" type="email" id="email" name="email"><br><br>
        <label class="label" for="password">Password:</label>
        <input class="inp" type="password" id="password" name="password"><br><br>
        <input class="submit" type="submit" name="login" value="Log In">
    </form>
</body>

</html>