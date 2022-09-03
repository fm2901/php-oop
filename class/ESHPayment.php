<?php
class ESHPayment implements Payment {
    private $id;
    private $status;
    private Account $pay_acc;
    private Account $rec_acc;
    private $sum;
    private $currency;

    const STATUS_NEW        = 1;
    const STATUS_QUEUE      = 2;
    const STATUS_PAYED      = 3;
    const STATUS_ROLLBACK   = 4;
    const STATUS_CANCELLED  = 5;

    function __construct($pay_acc, $rec_acc, $sum, $currency)
    {
        $this->id       = $this->generateID();
        $this->pay_acc  = $pay_acc;
        $this->rec_acc  = $rec_acc;
        $this->sum      = $sum;
        $this->currency = $currency;
        $this->status   = self::STATUS_NEW;
    }

    public function getCardInfo($pan)
    {
        return array("account" => 123);
    }

    public function getInfo()
    {
        return array(
            "id"       => $this->id,
            "pay_acc"  => $this->pay_acc,
            "pay_acc"  => $this->pay_acc,
            "sum"      => $this->sum,
            "currency" => $this->currency
        );
    }

    private function generateID() {
        return rand(1, 1000000000);
    }

    public function Pay(Account $pay_acc, Account $rec_acc)
    {
        if (!$pay_acc->withDraw($this->sum)) {
            $this->status = self::STATUS_CANCELLED;
            return;
        }

        $rec_acc->addToBalance($this->sum);
        $this->status = self::STATUS_PAYED;

        return $this;
    }

    function Rollback()
    {
        $this->status = self::STATUS_ROLLBACK;
        return $this;
    }
}