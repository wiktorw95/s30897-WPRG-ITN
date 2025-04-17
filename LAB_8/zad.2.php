<!DOCTYPE html>
<html>
<head>
    <title>Zad.2</title>
</head>
<body>
<h2>Usuwanie niepotrzebnych znaków</h2>
<form method="post">
    <label for="numbers">Wpisz tekst:</label><br>
    <input type="text" id="numbers" name="numbers"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $input = $_POST['numbers'];
    $unwanted_chars = array("\\", "/", ":", "*", "?", "\"", "<", ">", "|", "+", "-", ".");

    $wynik = str_replace($unwanted_chars, "", $input);

    echo "<p>Wynik: $wynik</p>";
}
?>
</body>
</html>
