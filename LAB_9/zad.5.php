<?php
$filename = 'ips.txt';

function isIpAllowed($filename, $userIp) {
    if (!file_exists($filename)) {
        file_put_contents($filename, "192.168.1.1");
    } else {
        $allowedIps = file($filename);
        return in_array($userIp, $allowedIps);
    }
    return false;
}

$userIp = $_SERVER['REMOTE_ADDR'];
if (isIpAllowed($filename, $userIp)) {
    echo "<h1>OK, Twoje IP jest zapisane w dokumencie!</h1>\n";
} else {

    echo "<h1>Witaj na standardowej stronie! Twoje IP jeszcze nie jest zapisane lub dokumentu nie ma!</h1>";
    echo "<p>Twój adres IP: $userIp</p>";
}
?>