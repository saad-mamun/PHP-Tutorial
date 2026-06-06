<?php
session_start();


// for example
if (isset($_POST['login'])) {


    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        header("Location: home.php");
    } else {
        echo "Missing username or password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>

<body>
    <!-- <div>
        <h1>This is the Home page</h1>
        <a href="index.php">Go to Log In Page</a>
    </div> -->

    <h1>This is the log In page</h1>
    <!--  for example -->
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="login" value="Log In">
    </form>

</body>

</html>

<?php
// $_SESSION['username'] = 'Liton Ali';
// $_SESSION['password'] = 'lkdas$45';

// echo $_SESSION['username'] . '<br>';
// echo $_SESSION['password'] . '<br>';





?>