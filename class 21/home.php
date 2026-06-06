<?php
session_start();


// for example
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
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
        <h1>This is the Home page</h1>
    <!--  for example -->
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>

</body>

</html>

<?php

echo $_SESSION['username'] . '<br>';
echo $_SESSION['password'] . '<br>';

?>