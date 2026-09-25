<?php

require_once "Figuur.php";

class Rechthoek extends Figuur
{
    private int $breedte;
    private int $hoogte;

    public function __construct(int $x, int $y, string $kleur, int $breedte, int $hoogte)
    {
        parent::__construct($x, $y, $kleur);
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
    }

    public function getBreedte(): int
    {
        return $this->breedte;
    }

    public function getHoogte(): int
    {
        return $this->hoogte;
    }
}