<?php
function pomnozMacierze($macierzA, $macierzB)
{
    $wierszeA = count($macierzA);
    $kolumnyA = count($macierzA[0]);
    $wierszeB = count($macierzB);
    $kolumnyB = count($macierzB[0]);

    if ($kolumnyA != $wierszeB) { // sprawdzamy, czy jest mozliwe pomnozenie tabel
        echo "Nie można pomnożyć macierzy";
        return 0;
    }

    $wynik = array_fill(0, $wierszeA, array_fill(0, $kolumnyB, 0)); //tworzymy nowa macierz wypelniona zerami

    // Mnożenie macierzy
    for ($i = 0; $i < $wierszeA; $i++) {
        for ($j = 0; $j < $kolumnyB; $j++) {
            for ($k = 0; $k < $kolumnyA; $k++) {
                $wynik[$i][$j] += $macierzA[$i][$k] * $macierzB[$k][$j];
            }
        }
    }
    return $wynik;
}

$macierzA = array( // tworzymy pierwsza macierz
    array(1, 2, 3, 4),
    array(4, 5, 6, 7),
    array(7, 8, 9, 10),
    array(7, 8, 9, 11)
);

$macierzB = array( // tworzymy druga macierz
    array(7, 8, 9),
    array(9, 10, 11),
    array(11, 12, 13),
    array(13, 14, 15)
);

$wynik = pomnozMacierze($macierzA, $macierzB);
if ($wynik) {
    echo "Wynik mnożenia macierzy: \n";
    foreach ($wynik as $wiersz) {
        echo implode(" - ", $wiersz) . "\n";
    }
}
?>