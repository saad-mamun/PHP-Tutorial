<?php

setcookie("fav_food", "Pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "Coca Cola", time() + (86400 * 2), "/");

foreach ($_COOKIE as $key => $value){
    echo " {$key} = {$value}  <br> ";
}

?>