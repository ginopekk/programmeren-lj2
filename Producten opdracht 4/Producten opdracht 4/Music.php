
<?php

require_once "Product.php";

class Music extends Product
{
    private string $artiest;
    private array $nummers;

    public function __construct(
        string $naam,
        float $inkoopprijs,
        float $btw,
        string $omschrijving,
        string $artiest,
        array $nummers
    ) {
        parent::__construct(
            $naam,
            $inkoopprijs,
            $btw,
            $omschrijving
        );

        $this->artiest = $artiest;
        $this->nummers = $nummers;
    }

    public function getProductInfo(): string
    {
        $info = "<b>Artiest:</b> " . $this->artiest;
        $info .= "<br><b>Extra info:</b><ul>";

        foreach ($this->nummers as $nummer) {
            $info .= "<li>" . $nummer . "</li>";
        }

        $info .= "</ul>";

        return $info;
    }
}