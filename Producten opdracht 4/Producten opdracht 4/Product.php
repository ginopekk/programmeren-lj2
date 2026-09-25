
<?php

abstract class Product
{
    private string $naam;
    private float $inkoopprijs;
    private float $btw;
    private string $omschrijving;

    public function __construct(
        string $naam,
        float $inkoopprijs,
        float $btw,
        string $omschrijving
    ) {
        $this->naam = $naam;
        $this->inkoopprijs = $inkoopprijs;
        $this->btw = $btw;
        $this->omschrijving = $omschrijving;
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function getInkoopprijs(): float
    {
        return $this->inkoopprijs;
    }

    public function getBtw(): float
    {
        return $this->btw;
    }

    public function getOmschrijving(): string
    {
        return $this->omschrijving;
    }

    public function getVerkoopprijs(): float
    {
        $winst = $this->inkoopprijs * 0.20;
        $prijsMetWinst = $this->inkoopprijs + $winst;

        return $prijsMetWinst * (1 + $this->btw / 100);
    }

    abstract public function getProductInfo(): string;
}