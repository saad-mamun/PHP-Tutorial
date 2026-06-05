<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <div>
        <h1>This is the Log In page</h1>
        <a href="home.php">Go to Home Page</a>
    </div>
</body>
</html>

<?php
$_SESSION['username'] = 'Liton Ali';
$_SESSION['password'] = 'lkdas$45';

echo $_SESSION['username'] . '<br>'; ;
echo $_SESSION['password'] . '<br>'; ;

?>