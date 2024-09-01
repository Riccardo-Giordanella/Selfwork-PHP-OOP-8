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

    public function sqr($a) {
        return sqrt($a);
    }
}

class Rettangolo {
    use Calculator;

    private $base;
    private $altezza;

    public function __construct($base, $altezza) {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function calcolaArea() {
        return $this->mul($this->base, $this->altezza);
    }

    public function calcolaPerimetro() {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }

    public function calcolaDiagonale() {
        return $this->sqr($this->sum($this->mul($this->base, $this->base), $this->mul($this->altezza, $this->altezza)));
    }
}

$rettangolo = new Rettangolo(3, 4);
echo "Area: " . $rettangolo->calcolaArea() . "\n";
echo "Perimetro: " . $rettangolo->calcolaPerimetro() . "\n";
echo "Diagonale: " . $rettangolo->calcolaDiagonale() . "\n";
?>
