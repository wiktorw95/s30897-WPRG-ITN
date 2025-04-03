<?php
function pierwsza($a)
{
    for ($i = 2; $i <= $a-1; $i++) {
        if(($a%$i)==0){
            return false;
        }
    }
    return true;

}
$zakres_min = 2;
$zakres_max = 1000;
for($a=$zakres_min;$a<=$zakres_max;$a++){
    if(pierwsza($a)){
        echo($a . " ");
    }
}
?>