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
            <!-- <div class="schaukasten">
                <p class="Vorschlag">Top Vorschläge</p>
                <?php
                include "AnzeigeKlasse.php";

                // $alleanzeigen = ["id" => "1", "Kategorie" => "Bücher", "Produkt" => "Buch", "Preis" => 22.45, "Datum" => "19-11-2024", "image" => "Url", "Bestätigung" => false];
                
                // // echo $alleanzeigen["id"];
                // foreach ($alleanzeigen as $attribut => $attributswert) {
                //     echo "$attribut : $attributswert <br/>";
                // }
                



                $HarryPotter = new Anzeige(1, "Bücher", "Harry Potter", 23, "19-11-2024", "\images\harrypotter.jpg", "Ein nettes Buch ,was ich abgebe, weil ich keine Zauberer mag", False);
                $Rechner = new Anzeige(2, "Technik", "Komplett-PC", 220, "10-10-2024", "\images\\rechner.jpg", "Ein alter Personal Computer", False);
                $Objekt = new Anzeige(2, "Lebensmittel", "Kartoffel", 15, "15-07-2023", "\images\kartoffel.jpg", "Ich verkaufe hier eine alte Kartoffel oder was es auch immer ist.", False);
                $Objekt2 = new Anzeige(2, "Dienstleistung", "IT-Nachhilfe", 2020, "12-01-2020", "\images\\nachhilfe.jpg", "Ich biete nebem IT auch Französisch an !", False);
                $Objekt3 = new Anzeige(2, "Möbel", "Höhenverstellbarer Tisch", 0, "02-11-2019", "\images\\tisch.jpg", "Ich verkaufe hiermit ein sehr begehrten höhenverstellbaren Tisch!!", False);





                $array = [$Rechner, $HarryPotter, $Objekt2, $Objekt3];
                $length = count($array);


                for ($i = 0; $i < $length; $i++) {


                    $array[$i]->show();
                }



                ?>
            </div> -->

            <p>Suchergebnisse: </p>


            <div class="suche_kasten">

                <?php for ($i = 0; $i < $length; $i++) {
                    $array = [$Rechner, $HarryPotter, $Objekt3, $Rechner, $HarryPotter, $Objekt2, $Rechner, $HarryPotter, $Objekt];
                    $length = count($array);


                    $array[$i]->show_Anzeige_Suche();
                } ?>
            </div>

            <p>Ende der Ergebnisse </p>

        </div>

    </div>
</body>

</html>