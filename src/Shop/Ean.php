<?php
namespace Shop;

final class Ean
{
    private $ean;

    private $product;

    public function __construct(string $ean)
    {
        $this->ean = new EanCode($ean);
    }

    public function getEan()
    {
        return (string) $this->ean;
    }

}
