<?php
// General singleton class.
class Singleton
{
    // Hold the class instance.
    private static $instance = null;

    private $conn = null;

    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct()
    {
        include "../config/conf.php";
        $this->$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
