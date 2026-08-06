<?php

define("USERNAME", "admin");
define("PASSWORD", "1234");


echo "Enter username: ";
$inputUsername = readline();

echo "Enter password: ";
$inputPassword = readline();

if( $inputUsername === USERNAME && $inputPassword ===PASSWORD){
    echo "Login Successful";
}else{
    echo "Invalid username or password";
}