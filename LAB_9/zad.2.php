<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Katalogi</title>
</head>
<body>
<form method="post">
    <label>Ścieżka:</label>
    <input type="text" id="path" name="path" required><br>

    <label>Nazwa katalogu:</label>
    <input type="text" id="directory" name="directory" required><br>

    <label>Operacja:</label>
    <select id="operation" name="operation">
        <option value="read">Odczyt</option>
        <option value="delete">Usuń</option>
        <option value="create">Utwórz</option>
    </select><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $path = $_POST["path"];
    $directory = $_POST["directory"];
    $operation = $_POST["operation"];
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }
    $fullPath = $path . $directory;


    if($operation === "read"){
        if (is_dir($fullPath)) {
            $items = scandir($fullPath);
            $items = array_diff($items, array('.', '..'));
            if(empty($items)) {
                echo "<p>Zawartość katalogu: Katalog jest pusty.</p>";
            }else{
                echo "<p>Zawartość katalogu: Katalog nie jest pusty!</p>";
            }
        } else {
            echo  "<p>Katalog nie istnieje.</p>";
        }
    }

    if ($operation === "delete") {
        if (is_dir($fullPath)) {
            $items = scandir($fullPath);
            $items = array_diff($items, array('.', '..'));
            if (empty($items)) {
                if (rmdir($fullPath)) {
                    echo "<p>Katalog został usunięty.</p>";
                } else {
                    echo "<p>Nie udało się usunąć katalogu.</p>";
                }
            } else {
                echo "<p>Katalog nie jest pusty.</p>";
            }
        } else {
            echo "<p>Katalog nie istnieje.</p>";
        }
    }

    if ($operation === "create") {
        if (!is_dir($fullPath)) {
            if (mkdir($fullPath)) {
                echo "<p>Katalog został utworzony.</p>";
            } else {
                echo "<p>Nie udało się utworzyć katalogu.</p>";
            }
        } else {
            echo "<p>Katalog już istnieje.</p>";
        }
    }
}


?>