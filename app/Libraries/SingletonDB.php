<?php

namespace App\Libraries;

use mysqli;

class SingletonDB
{
    private static $instance = null;
    private $_host = "localhost";
    private $_username = "db_user";
    private $_password = "db_password";
    private $_database = "db_name";
    private $_connection;

    private function __construct()
    {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new SingletonDB();
        }
        return self::$instance;
    }
    // Get mysqli connection
    public function getConnection()
    {
        return $this->_connection;
    }
}

//Para crear la instancia
 SingletonDB::getInstance();
