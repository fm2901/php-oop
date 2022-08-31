<?php
include "configs.php";

function __autoload($class_name)
{
    require_once(CLASSES_PATH."/".$class_name.'.class.php');
    if(method_exists($class_name,'init'))
        call_user_func(array($class_name,'init'));
    return true;
}

$person1 = new Person("Abdu", 35);
$person1->printInfo();