<?php
class CreditCard
{
    public $number;
    public $expire;
    public $balance;

    public function __construct($number, $expire, $balance)
    {
        $this->number = $number;
        $this->expire = $expire;
        $this->balance = $balance;
    }

    public function getExpire()
    {
        return $this->expire;
    }

    public function setExpire($expire)
    {
        $this->expire = $expire;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getBalance()
    {
        return $this->credit_card->balance . '€';
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}
