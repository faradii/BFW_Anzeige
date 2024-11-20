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
    <a class="admin_" href="">Einloggen Admin</a>
    <div class="Banner">


        <input placeholder="Was suchen Sie?"></input>
        <!-- <input placeholder="PLZ oder Ort"></input> -->
        <button class="blue_button" inputtype="submit"> <img src="/images/lupe.png" width="15px" alt="Q">Finden</button>
        <button class="grey_button" inputtype="submit">+ Anzeige aufgeben</button>

    </div>
    <div class="werbung">
        <p>Werbung</p>
        <p>Werbung</p>
        <p>Werbung</p>
        <p>Werbung</p>
        <p>Werbung</p>

    </div>
    <div class="Hauptseite">
        <!-- <p>Werbung</p> -->

        <div class="Rubrik">
            <p>Kategorien</p>
            <button class="Alles_Anzeigen_button">Alle Anzeigen</button>
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
                <?php
                include "AnzeigeKlasse.php";

                // $alleanzeigen = ["id" => "1", "Kategorie" => "Bücher", "Produkt" => "Buch", "Preis" => 22.45, "Datum" => "19-11-2024", "image" => "Url", "Bestätigung" => false];
                
                // // echo $alleanzeigen["id"];
                // foreach ($alleanzeigen as $attribut => $attributswert) {
                //     echo "$attribut : $attributswert <br/>";
                // }
                



                $HarryPotter = new Anzeige(1, "Bücher", "Harry Potter", 23, "19-11-2024", "\images\harrypotter.jpg", "Ein nettes Buch ,was ich abgebe, weil ich keine Zauberer mag", False);
                $Rechner = new Anzeige(2, "Technik", "ThinkCentre", 220, "10-10-2024", "\images\\rechner.jpg", "Ein alter Personal Computer", False);
                $Objekt = new Anzeige(2, "Lebensmittel", "Kartoffel", 15, "15-07-2023", "\images\kartoffel.jpg", "Ich verkaufe hier eine alte Kartoffel oder was es auch immer ist.", False);
                $Objekt2 = new Anzeige(2, "Dienstleistung", "Nachhilfe", 2020, "12-01-2020", "\images\\nachhilfe.jpg", "Ich biete nebem IT auch Französisch an !", False);




                $array = [$Rechner, $HarryPotter, $Objekt];
                $length = count($array);


                for ($i = 0; $i < $length; $i++) {


                    $array[$i]->show();
                }



                ?>
            </div>




            <div class="suche_kasten">

                <?php for ($i = 0; $i < $length; $i++) {
                    $array = [$Rechner, $HarryPotter, $Objekt, $Rechner, $HarryPotter, $Objekt, $Rechner, $HarryPotter, $Objekt];
                    $length = count($array);


                    $array[$i]->show_Anzeige_Suche();
                } ?>
            </div>
        </div>

    </div>
</body>

</html>