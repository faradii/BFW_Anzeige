<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <form action="test.php" method="POST" class="Formular_Anzeige">
        <p>Gib hier deine Anzeige auf!</p>
        <input placeholder="Kategorie" type="text" name="kategorie">
        <input placeholder="Name" type="text" name="name">
        <input type="submit" name="submit" value="Absenden" />
    </form>

    <?php
    include "DatabaseKlasse.php";

    if (isset($_POST['submit'])) {
        // var_dump($_POST);
    
        $kategorie = $_POST['kategorie'];
        $name = $_POST['name'];
        $preis = 3;
        $datum = "1900-12-12";
        $bild = "bild";
        $beschreibung = $_POST["beschreibung"];
        $bestätigung = 0;

        // $db = new Database();
        $db->insertProdukt(NULL, $kategorie, $name, $preis, $datum, $bild, $beschreibung, $bestätigung);

    }


    ?>
</body>

</html>