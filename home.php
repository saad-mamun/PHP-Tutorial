<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: practice.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div>
        <h1 class="suc-logo">This is home page</h1>
    </div>
    <form action="home.php" method="post">
        <input class="logout" type="submit" name="logout" value="Log Out">
    </form>
</body>

</html>