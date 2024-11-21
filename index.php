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
            <a href="AlleAnzeigen.php" class="Alles_Anzeigen_button">Alle Anzeigen</a>


            <ul>
                <li><a>Bücher</a></li>
                <li><a>Technik</a></li>
                <li> <a>Möbel</a></li>
                <li> <a>Dienstleistungen</a></li>
                <li><a>Lebensmittel</a></li>
            </ul>



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

                        echo "<div class='Anzeige_kasten'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
                    }
                }
                $conn->close();
                ?>
            </div>




            <!-- <div class="suche_kasten">

                <?php for ($i = 0; $i < $length; $i++) {
                    $array = [$Rechner, $HarryPotter, $Objekt3, $Rechner, $HarryPotter, $Objekt2, $Rechner, $HarryPotter, $Objekt];
                    $length = count($array);


                    $array[$i]->show_Anzeige_Suche();
                } ?>
            </div> -->
        </div>

    </div>
</body>

</html>