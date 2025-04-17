<html>
<head>
    <style>
        h1 {
            text-align: center;
        }
        body {
            text-align: center;
            background-color: white;
            color: #fff;
        }
        fieldset{
            background-color: gray;
            border-radius: 5px;
        }
    </style>
    <title>Zad.3</title>
</head>
<fieldset>
    <h1>Aplikacja</h1>
    <hr>
    <form method="post">
        <div class="formularz">
            <label>Podaj tekst: </label>
            <input type="text" id="text "name="text"><br>
            <select id="opcje" name="opcje">
                <option value=1>Odwrócenie ciągów znaków</option>
                <option value=2>Zamiana wszystkich liter na wielkie</option>
                <option value=3>Zamiana wszystkich liter na małe</option>
                <option value=4>Liczenie liczby znaków</option>
                <option value=5>Usuwanie białych znaków z początku i końca ciągu</option>
            </select>
            <input type="submit" name="submit" value="Wykonaj">
        </div>
    </form>
    <hr>

    <?php
    if(isset($_POST['submit'])) {
        $tekst = $_POST['text'];
        $opcje = $_POST['opcje'];
        if($tekst == ""){
            echo "<p>Podaj tekst!</p>";
        }
        else {
            switch($opcje) {
                case '1':
                    $tekst = strrev($tekst);
                    echo "<p>rev: $tekst</p>";
                    break;
                case '2':
                    $tekst = strtoupper($tekst);
                    echo "<p>strtoupper: $tekst</p>";
                    break;
                case '3':
                    $tekst = strtolower($tekst);
                    echo "<p>strtolen: $tekst</p>";
                    break;
                case '4':
                    $tekst = strlen($tekst);
                    echo "<p>len: $tekst</p>";
                    break;
                case '5':
                    $tekst = trim($tekst);
                    echo "<p>trim: $tekst</p>";
                    break;
                default:
                    $tekst = "Niepoprawny operator";
            }
        }
    }
    ?>
</fieldset>
</body>
</html>
