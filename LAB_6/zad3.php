<?php
function parametry($pierw, $roz, $liczba)
{
    $ary = $pierw;
    echo("Ciag arytmetyczny: ");
    for($a=$ary; $a<$liczba; $a++){
        echo($ary ." ");
        $ary = $ary + $roz;
    }
    echo("\nCiag geometryczny: ");
    for($a=$pierw; $a<$liczba; $a++){
        echo($pierw ." ");
        $pierw = $pierw * $roz;
    }
}
$pierw = 1;
$roz = 3;
$liczba = 10;
parametry($pierw, $roz, $liczba);
?>