<?php

class Huizen{
    private $verdiepingen;
    private $kamers;
    private $breedte;
    private $hoogte;
    private $diepte;
    private $kubiekemeters;


    public function __construct($verdiepingen, $kamers, $breedte, $hoogte, $diepte)
    {
        $this->verdiepingen = $verdiepingen;
        $this->kamers = $kamers;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;}

    /**
     * @return mixed
     */
    public function getVerdiepingen()
    {
        return $this->verdiepingen;
    }

    /**
     * @param mixed $verdiepingen
     */
    public function setVerdiepingen($verdiepingen): void
    {
        $this->verdiepingen = $verdiepingen;
    }

    /**
     * @return mixed
     */
    public function getKamers()
    {
        return $this->kamers;
    }

    /**
     * @param mixed $kamers
     */
    public function setKamers($kamers): void
    {
        $this->kamers = $kamers;
    }

    /**
     * @return mixed
     */
    public function getBreedte()
    {
        return $this->breedte;
    }

    /**
     * @param mixed $breedte
     */
    public function setBreedte($breedte): void
    {
        $this->breedte = $breedte;
    }

    /**
     * @return mixed
     */
    public function getHoogte()
    {
        return $this->hoogte;
    }

    /**
     * @param mixed $hoogte
     */
    public function setHoogte($hoogte): void
    {
        $this->hoogte = $hoogte;
    }

    /**
     * @return mixed
     */
    public function getDiepte()
    {
        return $this->diepte;
    }

    /**
     * @param mixed $diepte
     */
    public function setDiepte($diepte): void
    {
        $this->diepte = $diepte;
    }

    /**
     * @param mixed $kubiekemeters
     */
    public function setKubiekemeters($kubiekemeters): void
    {
        $this->kubiekemeters = $kubiekemeters;
    }
    
}

$huis1 = new Huizen('3', '7', '200', '20', '60');
$kubiekemeters = $huis1->getBreedte() * $huis1->getHoogte() * $huis1->getDiepte();

echo "Huis 1";
echo "<br/>Verdiepingen: ";
echo $huis1->getVerdiepingen();
echo "<br>Kamers: ";
echo $huis1->getKamers();
echo "<br>Breedte: ";
echo $huis1->getBreedte();
echo "<br>Hoogte: ";
echo $huis1->getHoogte();
echo "<br/>Diepte: ";
echo $huis1->getDiepte();
echo "<br/>Kubiekemeters: ";
echo $kubiekemeters;
echo "<br/>Prijs: ";
echo $kubiekemeters * 30;
echo "<br/><br/>";



$huis2 = new Huizen('7', '10', '300', '90', '80');
$kubiekemeters = $huis2->getBreedte() * $huis2->getHoogte() * $huis2->getDiepte();

echo "Huis 2";
echo "<br/>Verdiepingen: ";
echo $huis2->getVerdiepingen();
echo "<br>Kamers: ";
echo $huis2->getKamers();
echo "<br>Breedte: ";
echo $huis2->getBreedte();
echo "<br/>Hoogte: ";
echo $huis2->getHoogte();
echo "<br/>Diepte: ";
echo $huis2->getDiepte();
echo "<br/>Kubiekemeters: ";
echo $kubiekemeters;
echo "<br/>Prijs: ";
echo $kubiekemeters * 30;
echo "<br/><br/>";



$huis3 = new Huizen('1', '3', '130', '10', '80');
$kubiekemeters = $huis3->getBreedte() * $huis3->getHoogte() * $huis3->getDiepte();

echo "Huis 3";
echo "<br/>Verdiepingen: ";
echo $huis3->getVerdiepingen();
echo "<br>Kamers: ";
echo $huis3->getKamers();
echo "<br>Breedte: ";
echo $huis3->getBreedte();
echo "<br>Hoogte: ";
echo $huis3->getHoogte();
echo "<br/>Diepte: ";
echo $huis3->getDiepte();
echo "<br/>Kubiekemeters: ";
echo $kubiekemeters;
echo "<br/>Prijs: ";
echo $kubiekemeters * 30;
echo "<br/><br/>";