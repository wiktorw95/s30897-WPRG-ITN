<!DOCTYPE html>
<html>
<head>
    <title>Zad.4</title>
</head>
<body>
<h2>Samogłoski</h2>
<form method="post">
    <label for="numbers">Wpisz tekst:</label><br>
    <input type="text" id="numbers" name="numbers"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $input = $_POST['numbers'];
    $input = str_replace(" ", "", $input);

    $samogloski = array("b", "c", "d", "f", "g", "h", "i", "j", "k", "l", "ł", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z", "ą", "ę", "ż", "ć", "ó", "ź");

    $replaced = str_replace($samogloski, "", $input);

    $Result = strlen($replaced);
    echo "<p>Wynik: $Result</p>";
    echo "<p>Tekst: $replaced</p>";
}
?>
