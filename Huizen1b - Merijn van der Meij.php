<?php

class Huis{
    protected $huisnummer;
    public $kamers = [];

    /**
     * Huis constructor.
     * @param $huisnummer
     * @param array $kamers
     */
    public function __construct($huisnummer)
    {
        $this->huisnummer = $huisnummer;
    }

    /**
     * @return mixed
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    public function add_kamer(Kamers $placeholder)
    {
        $this->kamers[] = $placeholder;
    }

    /**
     * @return array
     */
    public function getKamers(): array
    {
        return $this->kamers;
    }



}



class Kamers{
    protected $diepte;
    protected $hoogte;
    protected $breedte;
    protected $prijs = 10;

    public function __construct($diepte, $hoogte, $breedte)
    {
        $this->diepte = $diepte;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }

    /**
     * @return mixed
     */


    public function getInhoud(){
        return $this->diepte * $this->hoogte * $this->breedte;
    }

    public function getPrijs(){
        return $this->getInhoud() * $this->prijs;
    }

    public function getAllPrijs(){
        return $this->prijs;
    }

    /**
     * @return mixed
     */
    public function getDiepte()
    {
        return $this->diepte;
    }

    /**
     * @return mixed
     */
    public function getHoogte()
    {
        return $this->hoogte;
    }

    /**
     * @return mixed
     */
    public function getBreedte()
    {
        return $this->breedte;
    }

    /**
     * @return mixed
     */





}




$huis1 = new Huis(1);
$huis2 = new Huis(7);

$kamer1 = new Kamers(7, 3, 5);
$kamer2 = new Kamers(9, 3, 7);

$huis1->add_kamer($kamer1);
$huis1->add_kamer($kamer2);




//var_dump($huis1);

echo "Huisnummer: ";
echo $huis1->getHuisnummer() . "</br>";
echo "Kamer1";
echo "</br>" . "Inhoud: ";
echo $kamer1->getInhoud() . "</br>";
echo "Prijs: ";
echo $kamer1->getPrijs() . "</br>";
echo "</br>" . "Kamer2";
echo "</br>" . "Inhoud: ";
echo $kamer2->getInhoud() . "</br>";
echo "Prijs: ";
echo $kamer2->getPrijs() . "</br>". "</br>";
echo "Prijs van alles bij elkaar: ";
//echo $kamer1->getPrijs() + $kamer2->getPrijs() . "</br>";

foreach ($huis1->getKamers() as $kamer){
    $totaalprijs[] = $kamer->getPrijs();
}

$totaal = array_sum($totaalprijs);
echo $totaal;


