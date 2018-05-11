<?php

class Preferences
{
    private $props = [];
    private static $instance;
    
    //...мы не можем создать объект напрямую, поскольку конструктор определен как privat...
    private function __construct() {}
    
    //...но у нас есть метод для этого
public static function getInstance()
{
    //если статическая переменная $instance равна null, то мы вернем новый экземпляр Preferences. Если нет-
    //создадим новый объект, поместим его в $instance и вернем его. В этом - суть синглтона.
    if(empty(self::$instance)){
        self::$instance = new Preferences();
    }
    
    return self::$instance;
}

public function setProperty($key, $val)
{
    $this->props[$key] = $val;
}

public function getProperty($key)
{
    return $this->props[$key];
}

}

$pref = Preferences::getInstance();

$pref->setProperty('name', 'Alex');

unset($pref);

$pref2 = Preferences::getInstance();

echo $pref2->getProperty('name');