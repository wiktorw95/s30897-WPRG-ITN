<!DOCTYPE html>
<html>
<head>
    <title>Zad.1</title>
</head>
<body>
<h2>Tekst w różnych wersjach</h2>
<form method="post" action="">
    <label for="text">Wprowadź tekst:</label><br>
    <input type="text" id="text" name="text"><br>
    <input type="submit" name="submit" value="Wynik">
</form>
<?php
if(isset($_POST['submit'])) {
    $input = $_POST['text'];

    $upper = strtoupper($input);
    echo "<p>Uppercasae: $upper</p>";
    $lower = strtolower($input);
    echo "<p>Lowercase: $lower</p>";
    $first_upper = ucfirst($input);
    echo "<p>First Uppercase: $first_upper</p>";
    $first_upper_of_each_word = ucwords($first_upper);
    echo "<p>First Uppercase: $first_upper_of_each_word</p>";
}
?>
</body>
</html>
