<?php

class Figuur
{
    protected int $x;
    protected int $y;
    protected string $kleur;

    public function __construct(int $x, int $y, string $kleur)
    {
        $this->x = $x;
        $this->y = $y;
        $this->kleur = $kleur;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getKleur(): string
    {
        return $this->kleur;
    }

    public function setKleur(string $kleur): void
    {
        $this->kleur = $kleur;
    }
}