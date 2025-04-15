<?php
function Pangram($str) {

    $str = strtolower($str);

    $letters = array_fill(0, 26, false);

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        $letters[ord($char) - ord('a')] = true;
    }

    return !in_array(false, $letters);
}

$str = "The quick brown fox jumps over the lazy dog";

if(Pangram($str)){
    echo("true");
}
else{
    echo("false");
}
?>
