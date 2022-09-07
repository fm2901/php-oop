<?php
namespace Bank {
    class Account
    {
        private $id;
        private $number;
        private $balance;
        private $currency;

        function __construct($id, $number, $balance, $currency)
        {
            $this->id = $id;
            $this->number = $number;
            $this->balance = $balance;
            $this->currency = $currency;
        }

        function addToBalance($sum)
        {
            $this->balance += $sum;
        }

        function withDraw($sum)
        {
            if ($this->balance < $sum) {
                return false;
            }

            $this->balance -= $sum;
            return;
        }

        function getBalance()
        {
            return $this->balance;
        }
    }
}