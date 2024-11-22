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
    <a class="admin_" href="index.php">Logout Admin</a>
    <div class="Banner">

        <p>Admin Bereich</p>
        <p>Admin Bereich</p>
        <p>Admin Bereich</p>




    </div>

    <div class="Hauptseite">




        <div class="Anzeigen">

            <p>Bitte bestätige diese Anzeigen um sie freizuschalten!</p>
            <!-- <div class="schaukasten">
                <p class="Vorschlag">Top Vorschläge</p>
               
            </div> -->




            <div class="suche_kasten">

                <?php
                include "DatabaseKlasse.php";
                $db = new Database();
                $db->showalladmin();
                ?>

            </div>
        </div>

    </div>
</body>

</html>