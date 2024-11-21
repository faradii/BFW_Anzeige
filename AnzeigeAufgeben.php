<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anzeige aufgeben</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <a href="AlleAnzeigen.php"><img src="/images/ebay_logo.png" alt="svg" width="400px"></a>
    <div class="flexer">
        <form action="AnzeigeAufgeben.php" method="POST" class="Formular_Anzeige">
            <p>Gib hier deine Anzeige auf!</p>
            <input placeholder="Kategorie" type="text" name="kategorie">
            <input placeholder="Name" type="text" name="name">
            <input placeholder="Preis" type="number" name="preis">
            <textarea placeholder="Beschreibung" type="text" name="beschreibung"></textarea>
            <input type="submit" name="submit" value="Absenden" />
        </form>
    </div>

    <?php
    include "DatabaseKlasse.php";

    if (isset($_POST['submit'])) {
        // var_dump($_POST);
    
        $kategorie = $_POST['kategorie'];
        $name = $_POST['name'];
        $preis = $_POST['preis'];
        $datum = "1900-12-12";
        $bild = "/images/nophoto.jpg";
        $beschreibung = $_POST["beschreibung"];

        $bestätigung = 0;

        $db = new Database();
        $db->insertProdukt(NULL, $kategorie, $name, $preis, $datum, $bild, $beschreibung, $bestätigung);

        echo " Warte bitte das deine Anzeige bestätigt wurde, dies kann einige Zeit dauern";
    }



    ?>
    <p>Hier kommst du zurück :</p>
    <a href="index.php">zurück</a>



</body>

</html>