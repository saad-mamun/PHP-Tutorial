<?php

function tyHint(int $a, float $b, string $c){
    $d = $a + $b;
    return $c . "'s Result is " .$d ."\n";
}
echo tyHint(4,0.65,"Naima");