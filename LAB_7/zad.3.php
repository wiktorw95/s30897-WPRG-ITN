<?php

function generateArray($a, $b, $c, $d) {
    $backup = $c;
    $result = array_fill(0,$b, 0 );
    for($i = $a; $i <= $b; $i++) {
        $tablica[] = $c;
        $c++;
        if($c==$d){
            $c = $backup;
        }
    }
    array_splice($result, $a, $b-$a, $tablica);

    return $result;
}

$a = 0;
$b = 26;
$c = 10;
$d = 19;

$array = generateArray($a, $b, $c, $d);
print_r($array);

?>
