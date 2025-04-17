<?php
function rozepchnij_tablice($tablica, $n) {
    if ($n < 0 || $n >= count($tablica)) {
        echo "BŁĄD.\n";
        return;
    }

    $nowa_tablica = array_splice($tablica, $n, 0, '$');

    foreach ($tablica as $key => $value) {
        $nowa_tablica[$key] = $value;
    }

    return $nowa_tablica;
}

$tablica = [1, 2, 3, 4, 5];
$n = 4;
$wynik = rozepchnij_tablice($tablica, $n);
print_r($tablica);
print_r($wynik);
?>