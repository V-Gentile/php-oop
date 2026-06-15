<?php

trait Calculator {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a){
        return sqrt($a); 
    }
}

class Rettangolo {
    use Calculator;

    public $b;
    public $h;

    public function __construct($b, $h) {
        $this->b = $b;
        $this->h = $h;
    }

    public function calcolaArea() {
        return $this->mul($this->b, $this->h);
    }

    public function calcolaPerimetro() {
        $doppioBase = $this->mul(2, $this->b);
        $doppioAltezza = $this->mul(2, $this->h);
        
        return $this->sum($doppioBase, $doppioAltezza);
    }

    public function calcolaDiagonale() {
        $baseAlQuadrato = $this->mul($this->b, $this->b);
        $altezzaAlQuadrato = $this->mul($this->h, $this->h);
        $sommaQuadrati = $this->sum($baseAlQuadrato, $altezzaAlQuadrato);
        
        return $this->sqr($sommaQuadrati);
    }
}

$rettangolo = new Rettangolo(4, 3);

echo "--- DATI RETTANGOLO (Base: 4, Altezza: 3) ---\n";
echo "Area: " . $rettangolo->calcolaArea() . "\n";
echo "Perimetro: " . $rettangolo->calcolaPerimetro() . "\n"; 
echo "Diagonale: " . $rettangolo->calcolaDiagonale() . "\n";
