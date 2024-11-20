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
        <button class="grey_button" inputtype="submit">+ Anzeige aufgeben</button>

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
            <ul>
                <li><a>Bücher</a></li>
                <li><a>Technik</a></li>
                <li> <a>Möbel</a></li>
                <li> <a>Dienstleistungen</a></li>
                <li><a>Lebensmittel</a></li>
            </ul>



        </div>
        <div class="Anzeigen">

            <p>alle Suchergebnisse: </p>
            <div class="suche_kasten">

                <?php


                $conn = new mysqli("localhost", "root", "", "bfw_datenbank");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);

                }
                // echo "Connected successfully <br/><br/>";
                

                $sql = "SELECT * FROM kleinanzeigen ";
                $ergebnis = $conn->query($sql);

                if ($ergebnis->num_rows > 0) {
                    while ($row = $ergebnis->fetch_assoc()) {

                        echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
                    }
                }
                ?>
            </div>
            <p>Ende der Ergebnisse </p>

        </div>

    </div>
</body>

</html>