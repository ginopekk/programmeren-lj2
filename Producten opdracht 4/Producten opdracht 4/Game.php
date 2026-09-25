
<?php

require_once "Product.php";

class Game extends Product
{
    private string $genre;
    private array $hardware;

    public function __construct(
        string $naam,
        float $inkoopprijs,
        float $btw,
        string $omschrijving,
        string $genre,
        array $hardware
    ) {
        parent::__construct(
            $naam,
            $inkoopprijs,
            $btw,
            $omschrijving
        );

        $this->genre = $genre;
        $this->hardware = $hardware;
    }

    public function getProductInfo(): string
    {
        $info = "<b>Genre:</b> " . $this->genre;
        $info .= "<br><b>Extra info:</b><ul>";

        foreach ($this->hardware as $eis) {
            $info .= "<li>" . $eis . "</li>";
        }

        $info .= "</ul>";

        return $info;
    }
}