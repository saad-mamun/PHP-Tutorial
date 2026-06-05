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
        <h1>This is the Home page</h1>
        <a href="index.php">Go to Log In Page</a>
    </div>
</body>

</html>

<?php

echo $_SESSION['username'] . '<br>';;
echo $_SESSION['password'] . '<br>';;

?>