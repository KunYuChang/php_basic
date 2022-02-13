<?php

// 繼承
class Customers extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
        echo 'A new ' . __CLASS__ . ' has been created.';
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
