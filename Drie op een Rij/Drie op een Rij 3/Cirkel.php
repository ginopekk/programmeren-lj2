<?php

require_once "Figuur.php";

class Cirkel extends Figuur
{
    private int $straal;

    public function __construct(int $x, int $y, string $kleur, int $straal)
    {
        parent::__construct($x, $y, $kleur);
        $this->straal = $straal;
    }

    public function getStraal(): int
    {
        return $this->straal;
    }
}