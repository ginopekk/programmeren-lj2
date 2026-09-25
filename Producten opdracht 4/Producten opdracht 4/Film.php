
<?php

require_once "Product.php";

class Film extends Product
{
    private string $kwaliteit;

    public function __construct(
        string $naam,
        float $inkoopprijs,
        float $btw,
        string $omschrijving,
        string $kwaliteit
    ) {
        parent::__construct(
            $naam,
            $inkoopprijs,
            $btw,
            $omschrijving
        );

        $this->kwaliteit = $kwaliteit;
    }

    public function getProductInfo(): string
    {
        return "<b>Kwaliteit:</b> " . $this->kwaliteit;
    }
}