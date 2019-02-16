<?php
echo "Datum: " . date("Y/m/d") . "<br>";
echo "Wasmachine: " . $_POST["wasmachine"] . "<br>";
echo "Droger: " . $_POST["droger"] . "<br>";
echo "Koelkast: " . $_POST["koelkast"] . "<br>";

class calcdata1 {

    public $number1;
    public $number2;
    public $number3;

    public function __construct() {
        $this->number1 = $number1 = $_POST['wasmachine'];
        $this->number2 = $number2 = $_POST['droger'];
        $this->number3 = $number3 = $_POST['koelkast'];

    }

    public function result(){

        switch(''){
            case "":
                return ($this->number1 + $this->number2 + $this->number3);
                break;

        }
    }
}

$show = new calcdata1();
echo "Totaal prijs ex. BTW: " . $show->result() . "<br>";

echo "Totaal prijs incl. BTW: ";
$som2 = $_POST['wasmachine'] + $_POST['droger'] + $_POST['koelkast'];
echo $som2 * 1.21;



