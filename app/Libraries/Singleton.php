<?php

namespace App\Libraries;

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

//Para crear la instancia

$singleton = Singleton::getInstance();
