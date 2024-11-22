<?php

class Database
{

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "bfw_datenbank";
    public $conn;

    public function __construct()
    {

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);

        }
        // echo "Connected successfully <br/><br/>";

    }
    public function insertProdukt($id, $kategorie, $name, $preis, $datum, $bild, $beschreibung, $bestätigung)
    {
        $stmt = $this->conn->prepare("INSERT INTO kleinanzeigen (id,kategorie,name, preis,datum,bild,beschreibung,bestätigung ) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("dssdsssd", $id, $kategorie, $name, $preis, $datum, $bild, $beschreibung, $bestätigung);




        if ($stmt->execute()) {
            echo "Erfolgreich hinzugefügt ";
        } else {
            echo "Fehler" . $this->conn->error;
        }
        $stmt->close();
    }

    public function Sql_bestätigen($id)
    {
        $stmt = $this->conn->prepare("UPDATE `kleinanzeigen` SET `bestätigung` = '1' WHERE id = ? ");
        $stmt->bind_param("i", $id, );




        if ($stmt->execute()) {
            echo "Erfolgreich hinzugefügt ";
        } else {
            echo "Fehler" . $this->conn->error;
        }
        $stmt->close();
    }





    public function showall()
    {
        $sql = "SELECT * FROM `kleinanzeigen` WHERE `bestätigung` = 1 ";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {

                echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
            }


        } else {
            echo "0 Ergebnisse" . $this->conn->error;
        }

    }
    public function showalladmin()
    {



        $sql = "SELECT * FROM kleinanzeigen WHERE `bestätigung` = 0 ";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {
                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $db = new Database();
                    $db->Sql_bestätigen($id);
                }
                if ($row["bestätigung"] == 0) {
                    $id = $row['id'];
                    echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li> <form method='POST' action=''><input type='hidden' name='id' value='$id'> <input type='Submit' name='submit' value='bestätigen'></form></li><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b></li></ul></div>";


                }

            }


        } else {
            echo "Fehler" . $this->conn->error;
        }

    }


    public function showBücher()
    {
        $sql = "SELECT * FROM kleinanzeigen WHERE kategorie LIKE 'Bücher' AND`bestätigung` = 1 ";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {

                echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
            }


        } else {
            echo "Fehler" . $this->conn->error;
        }

    }

    public function showTechnik()
    {
        $sql = "SELECT * FROM kleinanzeigen WHERE kategorie LIKE 'Technik' AND `bestätigung` = 1 ";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {

                echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
            }


        } else {
            echo "Fehler" . $this->conn->error;
        }

    }
    public function showMöbel()
    {
        $sql = "SELECT * FROM kleinanzeigen WHERE kategorie LIKE 'Möbel' AND `bestätigung` = 1";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {

                echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
            }


        } else {
            echo "Fehler" . $this->conn->error;
        }

    }
    public function showDienstleistung()
    {
        $sql = "SELECT * FROM kleinanzeigen WHERE kategorie LIKE 'Dienstleistung' AND `bestätigung` = 1";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {

                echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
            }


        } else {
            echo "Fehler" . $this->conn->error;
        }

    }
    public function showLebensmittel()
    {
        $sql = "SELECT * FROM kleinanzeigen WHERE kategorie LIKE 'Lebensmittel' AND `bestätigung` = 1 ";
        $ergebnis = $this->conn->query($sql);

        if ($ergebnis->num_rows > 0) {
            while ($row = $ergebnis->fetch_assoc()) {

                echo "<div class='Anzeige_suche'>" . "<img src='" . $row['bild'] . "'" . "width=200px height=150px/><ul><li>" . $row['name'] . "</li>" . "<li>" . " online seit: " . $row["datum"] . "</li>" . "<li>" . "Kategorie: " . $row["kategorie"] . "</li>" . "<li>" . $row["beschreibung"] . "</li><br/>" . "<li><b class='Preis'>" . $row["preis"] . "€</b>" . "</li>" . "</ul></div>";
            }


        } else {
            echo "Fehler" . $this->conn->error;
        }

    }



    public function __destruct()
    {
        $this->conn->close();
    }







}


?>