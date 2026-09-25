<?php

require_once "Figuur.php";

class Vierkant extends Figuur
{
    private int $grootte;

    public function __construct(int $x, int $y, string $kleur, int $grootte)
    {
        parent::__construct($x, $y, $kleur);
        $this->grootte = $grootte;
    }

    public function getGrootte(): int
    {
        return $this->grootte;
    }
}