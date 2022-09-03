<?php
include "configs.php";

spl_autoload_register(function ($class_name)
{
    require_once(CLASSES_PATH."/".$class_name.'.class.php');
    if(method_exists($class_name,'init'))
        call_user_func(array($class_name,'init'));
    return true;
});


//$person = new Person("Abdu", 35);
//$person->printInfo();
//echo $person->name;

//Abstract class
//$book = new Book("Чингисхан", 200);
//echo $book->getName();

//implement interface
$db = new Mysql("localhost", 3306, "root", "123");
$db->connect();
$db->query("SELECT * FROM users");
$person = new Person("Abdu", 35);
//$person->printInfo();
//echo $person->name;

//class A {
//    public static function who() {
//        echo __CLASS__;
//    }
//    public static function test() {
//        static::who();
//    }
//}
//
//class B extends A {
//    public static function who() {
//        echo __CLASS__;
//    }
//}
//
//class C extends A {
//    public static function who() {
//        echo __CLASS__;
//    }
//}
//
//B::test();
//C::test();
//C::who();

$book = new Book("Чингисхан", 200);
echo $book->getName();
