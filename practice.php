<?php

$password = "litonALI9118";

$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify($password, $hash)){
    echo "Password is Verify";
}else{
    echo "Invalid Password";
}



?>