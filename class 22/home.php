

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
</head>
<body>

<!-- page name autometic recive korbe -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
        <input type= "text" name="username" />
        <input type="submit" value="Submit" />
    </form>
    
</body>
</html>
<?php
//server

foreach ($_SERVER as $key => $value) {
    // echo "$key: $value <br>";
}



?>