<?php
class Pajak {
private float $tarif;
public function __construct(float $tarif) {
$this->tarif = $tarif;
}


public function hitungTotal(float $hargaProduk): float {
return $hargaProduk + ($hargaProduk * $this->tarif);
}
}