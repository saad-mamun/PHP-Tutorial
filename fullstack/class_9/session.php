<?php

session_start();

$_SESSION['username'] = 'Sobuj';
$_SESSION['userId'] = '2157419';

echo $_SESSION['username'];
echo "<br>";
echo $_SESSION['userId'];


session_unset();
session_destroy();
echo "<br>";
echo "After Destroy";
echo $_SESSION['username'];