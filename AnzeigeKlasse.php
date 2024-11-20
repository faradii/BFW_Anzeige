<?php

class Anzeige
{

    public $id;
    public $Kategorie;
    public $Produkt;
    public $Preis;
    public $Datum;
    public $Image;
    public $Bestätigung;

    public function __construct($id, $Kategorie, $Produkt, $Preis, $Datum, $Image, $Beschreibung, $Bestätigung)
    {

        $this->id = $id;
        $this->Kategorie = $Kategorie;
        $this->Produkt = $Produkt;
        $this->Preis = $Preis;
        $this->Datum = $Datum;
        $this->Image = $Image;
        $this->Beschreibung = $Beschreibung;
        $this->Bestätigung = $Bestätigung;




    }

    public function show()
    {

        echo "<div class='Anzeige_kasten' > 

<p><img src='$this->Image' width=150px height=150px/></p>
<p>$this->Produkt </p>
        <p> $this->Preis € </p>
      
   


 </div>";
    }

    public function show_Anzeige_Suche()
    {

        echo "<div class='Anzeige_suche'> 
        <img src='$this->Image' width=200px height=150px/><ul>
        
<li><b>$this->Produkt </b></li>
<li>Online seit: $this->Datum </li>
<li>Kategorie: $this->Kategorie </li>
<li> $this->Beschreibung </li>
<li><b> $this->Preis € </b></li>


</ul> </div>";
    }


}

?>