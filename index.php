<?php
include "configs.php";

//spl_autoload_register(function ($class_name)
//{
//    require_once(CLASSES_PATH."/".$class_name.'.php');
//    if (method_exists($class_name,'init')) {
//        call_user_func(array($class_name,'init'));
//    }
//
//    return true;
//});

spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = '';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '\class\\';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '\\', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
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
//use Example\Person;
//$p = new Person('Abdu', 12);

$pay_acc = new \Bank\Account(1, "20216123", 10000, \Bank\Currency::TJS);
$rec_acc = new \Bank\Account(1, "20216444", 1000, \Bank\Currency::TJS);
$payment = new \Bank\ESHPayment($pay_acc, $rec_acc, 100, \Bank\Currency::TJS);
//pre($payment);
pre($pay_acc);
$payment->Pay($pay_acc, $rec_acc);
pre($pay_acc);
//pre($payment);
//$payment->Rollback();
//pre($payment);

