<?php

$password = "LitonALI123";

$hash = password_hash($password, PASSWORD_DEFAULT);
// echo $hash;


// password and hash jodi match kore tahole password_verify() function true return korbe, na hole false return korbe.
if (password_verify($password, $hash)){
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}


?>