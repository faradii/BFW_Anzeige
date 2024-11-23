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

        <form action="" method="POST">
            <input type="text" placeholder="Was suchen Sie?" name="Suchabfrage" required>
            <input class="blue_button" type="submit" name="submit" value="Finden"/> 
        </form>
        

    </div>
<?php 


    include "DatabaseKlasse.php";

    $db = new Database();
 
    if (isset($_POST['submit'])){

        if (isset($_POST["Suchabfrage"]) && !empty($_POST["Suchabfrage"])){
            $eingabe= trim($_POST["Suchabfrage"]);//bereinigt feld nach der frage
            $db->showsuche($eingabe);
        }
        else{
        echo "";
        }
    }
           
?>


    
  


</body>

</html>