<?php
namespace Bank {
    interface Payment
    {
        function __construct($pay_acc, $rec_acc, $sum, $currency);

        function getInfo();

        function getCardInfo($pan);

        function Pay(Account $pay_acc, Account $rec_acc);

        function Rollback();
    }
}