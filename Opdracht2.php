<?php

class Klant{
    public $naam;
    public $Email;
    public $Adres;
    public $Leeftijd;

    public function __construct($naam, $Email, $Adres, $Leeftijd)
    {
        $this->naam = $naam;
        $this->Email = $Email;
        $this->Adres = $Adres;
        $this->Leeftijd = $Leeftijd;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function getAdres()
    {
        return $this->Adres;
    }

    public function setAdres($Adres)
    {
        $this->Adres = $Adres;
    }

    public function getLeeftijd()
    {
        return $this->Leeftijd;
    }

    public function setLeeftijd($Leeftijd)
    {
        $this->Leeftijd = $Leeftijd;
    }
}

class Auto {
    public $Merk;
    public $Kleur;
    public $Kenteken;

    public function __construct($Merk, $Kleur, $Kenteken)
    {
        $this->Merk = $Merk;
        $this->Kleur = $Kleur;
        $this->Kenteken = $Kenteken;
    }

    public function getMerk()
    {
        return $this->Merk;
    }
    public function setMerk($Merk)
    {
        $this->Merk = $Merk;
    }


    public function getKleur()
    {
        return $this->Kleur;
    }
    public function setKleur($Kleur)
    {
        $this->Kleur = $Kleur;
    }

    public function getKenteken()
    {
        return $this->Kenteken;
    }
    public function setKenteken($Kenteken)
    {
        $this->Kenteken = $Kenteken;
    }




}




$klant = new Klant('Merijn', 'merijn.vandermeij@gmail.com', 'Orkest 20', '17' );

$auto = new Auto('Audi A5', 'Zwart', 'okf-34-d');


echo "Auto:";
echo "<br>";
echo "Automerk: " . $auto->getMerk();
echo "<br>";
echo "Autokleur: " . $auto->getKleur();
echo "<br>";
echo "Autokenteken: " . $auto->getKenteken();
echo "<br>";
echo "<br>";
Echo "Klant:";
echo "<br>";
echo "Naam: " . $klant->getNaam();
echo "<br>";
echo "Email: " . $klant->getEmail();
echo "<br>";
echo "Adres: " . $klant->getAdres();
echo "<br>";
echo "Leeftijd: " . $klant->getLeeftijd();




