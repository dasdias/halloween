<?php
class Pdo_connect {

    private const HOST = 'localhost';
    private const DB = 'halloween';
    private const USER = 'root';
    private const PASS = '';    
    private const CHARSET = 'utf8';

    protected static $_instance;

    protected $DSN;
    protected $OPD;
    public $PDO;

    private function __construct() {
        $this->DSN = "mysql:host=" . SELF::HOST . ";dbname=" . SELF::DB . ";charset=" . SELF::CHARSET;
        $this->OPD = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];        
        $this->PDO = new PDO($this->DSN, SELF::USER, SELF::PASS, $this->OPD);
    }


    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    // public static function query($stmt)  {
    //     return self::$_instance->query($stmt);
    //   }

    
    private function __clone() {}
    private function __wakeup() {}
}
?>