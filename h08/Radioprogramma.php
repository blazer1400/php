<?php
class Radioprogramma {
    public $programmanaam = "hans enzo";
    public $omschrijving = "hans steelt de show";
    public $liedjes;

    public function getLiedjes() {
        $this->liedjes = ["nummer1", "nummer2", "nummer3"];
        return $this->liedjes;
    }

    public function getProgramma() {

        $output = [$this->programmanaam, $this->omschrijving];
        return $output;

    }

}
$programma = new Radioprogramma;
print_r($programma->getProgramma());
print_r($programma->getLiedjes());