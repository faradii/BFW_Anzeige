<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    </link>
</head>

<body>

    <a href="index.php"><img src="/images/ebay_logo.png" alt="svg" width="400px"></a>
    <h3>BFW-Version Kostenpflichtig. Kompliziert. Nutzlos.</h3>
    <a class="admin_" href="Loginadmin.php">Einloggen Admin</a>
    <div class="Banner">

        <form action="Suche.php" methode="POST">
            <input placeholder="Was suchen Sie?">

            <img class="lupe" src="/images/lupe.png" width="20px" alt="Q">
            <input class="blue_button" type="submit" value="Finden"> </input>
        </form>
        <a href="AnzeigeAufgeben.php"> <button class="grey_button">+ Anzeige aufgeben</button></a>

    </div>
    <div class="werbung">
        <img src="/images/werbung1.jpeg" alt="svg" width="400px">
        <img src="/images/werbung2.jpg" alt="svg" width="400px">
        <img src="/images/werbung3.jpg" alt="svg" width="400px">
        <img src="/images/werbung4.jpg" alt="svg" width="400px">


    </div>
    <div class="Hauptseite">
        <!-- <p>Werbung</p> -->

        <div class="Rubrik">
            <p>Kategorien</p>
            <form method="POST" action="">
                <ul>
                    <li><a><button type="submit" name="action" value="Bücher">Bücher</button></a></li>
                    <li><a><button type="submit" name="action" value="Technik">Technik</button></a></li>
                    <li> <a><button type="submit" name="action" value="Möbel">Möbel</button></a></li>
                    <li> <a><button type="submit" name="action" value="Dienstleistung">Dienstleistungen</button></a>
                    </li>
                    <li><a><button type="submit" name="action" value="Lebensmittel">Lebensmittel</button></a></li>

                </ul>
            </form>


        </div>
        <div class="Anzeigen">

            <p>alle Suchergebnisse: </p>
            <div class="suche_kasten">

                <?php

                // include "DatabaseKlasse.php";
                // $db = new Database();
                // $db->showall();
                
                if (isset($_POST['action'])) {
                    if ($_POST['action'] === 'Bücher') {


                        $db->showBücher();
                    }
                    if ($_POST['action'] === 'Technik') {


                        $db->showTechnik();
                    }
                    if ($_POST['action'] === 'Möbel') {


                        $db->showMöbel();
                    }
                    if ($_POST['action'] === 'Dienstleistungen') {


                        $db->showDienstleistung();
                    }
                    if ($_POST['action'] === 'Lebensmittel') {


                        $db->showLebensmittel();
                    }
                }
                //ohne klasse wäre die alternative die hier: 
                
                // $conn = new mysqli("localhost", "root", "", "bfw_datenbank");
                // if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                
                // }
                // // echo "Connected successfully <br/><br/>";
                

                // $sql = "SELECT * FROM kleinanzeigen ";
                // $ergebnis = $conn->query($sql);
                
                // if ($ergebnis->num_rows > 0) {
                //     while ($row = $ergebnis->fetch_assoc()) {
                
                //         echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
                //     }
                // }
                // $conn->close();
                ?>


            </div>
            <p>Ende der Ergebnisse </p>

        </div>

    </div>
</body>

</html>