<?php
$wynik = "";
function stopnieNaRadiany($stopnie) {
    return $stopnie * (M_PI / 180);
}

// Kalkulator prosty
if(isset($_POST['prosty'])) {
    $liczba1 = $_POST['num1'];
    $liczba2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch($operator) {
        case 'add':
            $wynik = $liczba1 + $liczba2;
            break;
        case 'subtract':
            $wynik = $liczba1 - $liczba2;
            break;
        case 'multiply':
            $wynik = $liczba1 * $liczba2;
            break;
        case 'divide':
            if($liczba2 != 0) {
                $wynik = $liczba1 / $liczba2;
            } else {
                $wynik = "Nie można dzielić przez zero!";
            }
            break;
        default:
            $wynik = "Niepoprawny operator";
    }
}
if(isset($_POST['zaawansowany'])) {
    $liczba3 = $_POST['num3'];
    $operator = $_POST['operatorZaawansowany'];

    switch($operator) {
        case 'cos':
            $wynik = cos(stopnieNaRadiany($liczba3));
            break;
        case 'sin':
            $wynik = sin(stopnieNaRadiany($liczba3));
            break;
        case 'tan':
            $wynik = tan(stopnieNaRadiany($liczba3));
            break;
        case 'binToDec':
            $wynik = bindec($liczba3);
            break;
        case 'decToBin':
            $wynik = decbin($liczba3);
            break;
        case 'decToHex':
            $wynik = dechex($liczba3);
            break;
        case 'hexToDec':
            $wynik = hexdec($liczba3);
            break;
        default:
            $wynik = "Niepoprawny operator";
    }
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <style>
        h2 {
            text-align: center;
        }
        body {
            display: flex;
            width: 1000px;
            height: 100%;
            text-align: center;
            background-color: white;
            color: #fff;
        }
        fieldset{
            background-color: black;
            border-radius: 5px;
        }

        .kalkulator {
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #222;
            width: 300px;
        }

        input[type="number"], select {
            margin-bottom: 10px;
            padding: 8px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            color: black;
        }

        button {
            background-color: #c6c6c6;
            color: black;
            margin: 10px;
            padding: 10px 20px;
            width: 100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #5c5c5c;
        }

        input {
            margin-top: 10px;
            padding: 8px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
<fieldset>
    <h2>Kalkulator</h2>
    <hr>
    <div class="kalkulator">
        <h2>Prosty</h2>
        <hr>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Wpisz liczbę" required>
            <select name="operator">
                <option value="add">Dodawanie (+)</option>
                <option value="subtract">Odejmowanie (-)</option>
                <option value="multiply">Mnożenie (*)</option>
                <option value="divide">Dzielenie (/)</option>
            </select>
            <input type="number" name="num2" placeholder="Wpisz liczbę" required>
            <input type="submit" name="prosty" value="Oblicz">
        </form>
        <hr>
        <h2>Zaawansowany</h2>
        <form method="post" action="">
            <input type="number" name="num3" placeholder="Wpisz liczbę" required>
            <select name="operatorZaawansowany">
                <option value="cos">Cosinus</option>
                <option value="sin">Sinus</option>
                <option value="tan">Tangens</option>
                <option value="binToDec">Binarne na dziesiętne</option>
                <option value="decToBin">Dziesiętne na binarne</option>
                <option value="decToHex">Dziesiętne na szesnastkowe</option>
                <option value="hexToDec">Szesnastkowe na dziesiętne</option>
            </select>
            <input type="submit" name="zaawansowany" value="Oblicz">
        </form>
    </div>
    <input type="text" value="<?php echo $wynik; ?>" placeholder="Wynik" readonly>
</fieldset>

</body>
</html>
