<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Data Urodzenia</title>
</head>
<body>
<form method="get">
    <label for="birthdate">Podaj swoje urodziny:</label><br>
    <input type="date" id="birthdate" name="birthdate" required><br>
    <input type="submit" value="Wyślij">
</form>
</body>
</html>

<?php
if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];

    function dzientyg($date) {
        $dateObj = new DateTime($date);
        $daysOfWeek = ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
        return $daysOfWeek[$dateObj->format('w')];
    }

    function wiek($date) {
        $birthDate = new DateTime($date);
        $currentDate = new DateTime();
        return $currentDate->diff($birthDate)->y;
    }

    function Do_uro($date) {
        $birthDate = new DateTime($date);
        $currentDate = new DateTime();
        $currentYear = $currentDate->format('Y');

        $nextBirthday = new DateTime($currentYear . '-' . $birthDate->format('m-d'));
        if ($nextBirthday < $currentDate) {
            $nextBirthday->modify('+1 year');
        }

        return $currentDate->diff($nextBirthday)->days;
    }

    $dzientyg = dzientyg($birthdate);
    $wiek = wiek($birthdate);
    $do_uro = Do_uro($birthdate);

    echo "<p>Urodziłeś/aś się w: $dzientyg<br>
    Ukończone lata: $wiek<br>
    Dni do najbliższych urodzin: $do_uro<br></p>";
}
?>