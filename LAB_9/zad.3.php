<?php
$filename = 'licznik.txt';
if (!file_exists($filename)) {
    file_put_contents($filename, "1");
    $visits = 1;
} else {
    $visits = (int)file_get_contents($filename);
    $visits++;
    file_put_contents($filename, $visits);
}
echo "<p>Visits: $visits</p>";
?>