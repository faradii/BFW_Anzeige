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

    <img src="/images/ebay_logo.png" alt="svg" width="400px">
    <h3>BFW-Version Kostenpflichtig. Kompliziert. Nutzlos.</h3>
    <!-- <form action="Loginadmin.php" methode="POST">

        <input type="submit" value="Einloggen Admin"> </input>
    </form> -->
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




            <div class="">

                <form method="POST" action="">
                    <ul>
                        <li><button type="submit" name="action" value="Alle">Alle Anzeigen</button></li>
                        <li><a><button type="submit" name="action" value="Bücher">Bücher</button></a></li>
                        <li><a><button type="submit" name="action" value="Technik">Technik</button></a></li>
                        <li> <a><button type="submit" name="action" value="Möbel">Möbel</button></a></li>
                        <li> <a><button type="submit" name="action" value="Dienstleistung">Dienstleistungen</button></a>
                        </li>
                        <li><a><button type="submit" name="action" value="Lebensmittel">Lebensmittel</button></a></li>
                    </ul>
                </form>


            </div>


        </div>


        <div class="Anzeigen">
            <div class="schaukasten">
                <p class="Vorschlag">Top Vorschläge</p>
                <?php


                $conn = new mysqli("localhost", "root", "", "bfw_datenbank");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);

                }
                // echo "Connected successfully <br/><br/>";
                

                $sql = "SELECT * FROM kleinanzeigen ";
                $ergebnis = $conn->query($sql);

                if ($ergebnis->num_rows > 0) {
                    $i = 0;
                    while ($i < 4 and $row = $ergebnis->fetch_assoc()) {
                        $i++;

                        echo "<div class='Anzeige_kasten'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . "<li><b class='Preis'> </br>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
                    }
                }
                $conn->close();
                ?>
            </div>




            <div class="suche_kasten">

                <p>alle Suchergebnisse: </p>
                <div class="suche_kasten">

                    <?php

                    include "DatabaseKlasse.php";
                    $db = new Database();
                    // $db->showall();
                    
                    if (isset($_POST['action'])) {
                        if ($_POST['action'] === 'Alle') {


                            $db->showall();
                        }
                        if ($_POST['action'] === 'Bücher') {


                            $db->showBücher();
                        }
                        if ($_POST['action'] === 'Technik') {


                            $db->showTechnik();
                        }
                        if ($_POST['action'] === 'Möbel') {


                            $db->showMöbel();
                        }
                        if ($_POST['action'] === 'Dienstleistung') {


                            $db->showDienstleistung();
                        }
                        if ($_POST['action'] === 'Lebensmittel') {


                            $db->showLebensmittel();
                        }

                    }

                    ?>


                </div>
</body>

</html>