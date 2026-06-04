<?php

setcookie("fav_food", "Pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "Coca Cola", time() + (86400 * 2), "/");

/*
foreach ($_COOKIE as $key => $value){
    echo " {$key} = {$value}  <br> ";
}
    */

if (isset($_COOKIE["fav_food"])) {
    echo "Your favorite food is: " . $_COOKIE["fav_food"] . "<br>";
    echo "So, Buy some {$_COOKIE["fav_food"]}! <br>  <br> ";
} else {
    echo "Favorite food cookie is not set.<br>  <br> ";
}

if (isset($_COOKIE["fav_drink"])) {
    echo "Your favorite drink is: " . $_COOKIE["fav_drink"] . "<br>";
    echo "So, Buy some {$_COOKIE["fav_drink"]}! <br>  <br> ";
} else {
    echo "Favorite drink cookie is not set.<br>  <br> ";
}
