<?php
namespace Shop;

use Shop\Email;

final class Customer
{
    private $name;

    private $email;

    private $surname;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = new Email($email);
    }
}
