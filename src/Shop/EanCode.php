<?php


namespace Shop;

final class EanCode
{
    private $code;

    public function __construct(string $code)
    {
        //validate code
        //if not valid thrown new InvalideEanCode
        $this->code = $code;
    }

    public function __toString()
    {
        return (string) $this->code;
    }
}
