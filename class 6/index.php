<?php
$age =  20;


if($age >= 100){
    echo "You are too old to enter this site";
}
elseif($age >= 18){
    echo "You may enter this site";
}
elseif($age <= 0){
    echo "You are not born yet";
}

else{
    echo "You must be 18+ to enter this site";
}




?>