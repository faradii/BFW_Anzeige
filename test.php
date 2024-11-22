<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_login</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <div class="flexer"></div>
    <a href="index.php"><img src="/images/ebay_logo.png" alt="svg" width="400px"></a>

    <p>Logg dich hier ein, lieber Admin!</p>
    <form action="" method="POST" class="Formular_Admin">

        <input placeholder="Email" name="email">
        <input placeholder="Passwort" name="passwort">

        <input type="submit" name="submit" value="Einloggen"> </input>
    </form>

    <?php
    session_start();

    $admin_name = 'faro';
    $admin_passwort = "1234";




    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $passwort = $_POST['passwort'];
        if ($email === $admin_name && $passwort === $admin_passwort) {

            echo "eingeloggt";

            $_SESSION['eingeloggt'] = true;
            if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] === true) {
                echo "Session eingeloggt";

            }
        } else {
            echo "Fehler im isset";
        }


    } else {
        echo "nicht eingeloggt ";
    }
    ?>
    <?php

    echo $_SESSION['email2'];




    ?>




</body>

</html>