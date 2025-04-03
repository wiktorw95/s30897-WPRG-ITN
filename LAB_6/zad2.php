<?php
function suma_cyfr($liczba)
{
    $wynik = 0;
    for ($i = 0; $i < strlen($liczba); $i++) {
        $tab[$i] = $liczba % 10;
        $wynik += $tab[$i];
        $liczba = $liczba / 10;
    }
    return $wynik;

}

$liczba = 123456;
echo(suma_cyfr($liczba). "\n");

?>