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

    public function __destruct()
    {
        $this->conn->close();
    }







}


?>