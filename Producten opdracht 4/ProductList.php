
<?php

class ProductList
{
    private array $producten = [];

    public function voegProductToe(Product $product): void
    {
        $this->producten[] = $product;
    }

    public function toonTabel(): string
    {
        $tabel = "<table border='1'>";
        $tabel .= "<tr>";
        $tabel .= "<th>Categorie</th>";
        $tabel .= "<th>Naam product</th>";
        $tabel .= "<th>Verkoopprijs</th>";
        $tabel .= "<th>Info</th>";
        $tabel .= "</tr>";

        foreach ($this->producten as $product) {
            $categorie = get_class($product);

            $tabel .= "<tr>";
            $tabel .= "<td>" . $categorie . "</td>";
            $tabel .= "<td>" . $product->getNaam() . "</td>";
            $tabel .= "<td>€ " . number_format(
                $product->getVerkoopprijs(),
                2,
                '.',
                ''
            ) . "</td>";
            $tabel .= "<td>" . $product->getProductInfo() . "</td>";
            $tabel .= "</tr>";
        }

        $tabel .= "</table>";

        return $tabel;
    }
}