<?php
namespace Shop;

final class Email
{
    private $email;

    public function __construct($email)
    {
        //validate email, if error throw exeption

        $this->email = $email;
    }

    public function __toString()
    {
        return (string) $this->email;
    }
}
