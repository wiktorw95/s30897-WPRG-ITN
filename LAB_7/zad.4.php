
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Zad.4</title>
    <style>
        input{
            height: 14px;
            margin: 0;
        }
        button{
            height: 20px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php

$showTable = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $confirmPassword = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";
    $showTable = true;
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div class="input-box">
        <span>Imię:</span>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div class="input-box">
        <span>Nazwisko:</span>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div class="input-box">
        <span>Adres email:</span>
        <input type="email" id="email" name="email">
    </div>
    <div class="input-box">
        <span>Hasło:</span>
        <input type="password" id="password" name="password">
    </div>
    <div class="input-box">
        <span>Potwierdź hasło:</span>
        <input type="password" id="confirmPassword" name="confirmPassword">
    </div>
    <div class="input-box">
        <span>Wiek:</span>
        <input type="number" id="age" name="age">
    </div>
    <button type="submit">Zarejestruj się</button>
</form>

<?php if ($showTable): ?>
    <div style="margin-top: 20px;">
        <h3>Wprowadzone dane:</h3>
        <table>
            <thead>
            <tr>
                <th>Pole</th>
                <th>Wartość</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Imię</td>
                <td><?php echo $firstName; ?></td>
            </tr>
            <tr>
                <td>Nazwisko</td>
                <td><?php echo $lastName; ?></td>
            </tr>
            <tr>
                <td>Adres email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Hasło</td>
                <td><?php echo $password; ?></td>
            </tr>
            <tr>
                <td>Potwierdź hasło</td>
                <td><?php echo $confirmPassword; ?></td>
            </tr>
            <tr>
                <td>Wiek</td>
                <td><?php echo $age; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>

</body>
</html>
