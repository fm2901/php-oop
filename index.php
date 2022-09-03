<?php
include "configs.php";

spl_autoload_register(function ($class_name)
{
    require_once(CLASSES_PATH."/".$class_name.'.php');
    if (method_exists($class_name,'init')) {
        call_user_func(array($class_name,'init'));
    }

    return true;
});


//$person = new Person("Abdu", 35);
//$person->printInfo();
//echo $person->name;

//Abstract class
//$book = new Book("Чингисхан", 200);
//echo $book->getName();

//implement interface
//$db = new Mysql("localhost", 3306, "root", "123");
//$db->connect();
//$db->query("SELECT * FROM users");
//$person = new Person("Abdu", 35);
//$person->printInfo();
//echo $person->name;

//$book = new Book("Чингисхан", 200);
//echo $book->getName();

$pay_acc = new Account(1, "20216123", 10000, Currency::TJS);
$rec_acc = new Account(1, "20216444", 1000, Currency::TJS);
$payment = new ESHPayment($pay_acc, $rec_acc, 100, Currency::TJS);
//pre($payment);
pre($pay_acc);
$payment->Pay($pay_acc, $rec_acc);
pre($pay_acc);
//pre($payment);
//$payment->Rollback();
//pre($payment);