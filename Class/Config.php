<?php
/**
 * Short description for code
 * php version 7.2.10
 *
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Pandey <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName
 *
 * This is a "Docblock Comment"
 */
class Config
{
    public $host_name = 'localhost';
    public $user_name = 'root';
    public $password = '';
    public $database = 'CedHosting';

     /**
      * Display the cart
      *
      * @return String
      *
      * @since 1.0.1
      */
    public function Connect() 
    {
        $this->conn = new mysqli($this->host_name, $this->user_name, $this->password, $this->database);
        if ($this->conn->connect_error) {
            $output  = "Connection Failed " . $this->conn->connect_error ."due to this reason";
        } else {
            $output =  $this->conn;
        }
        return $output;
    }
}


?>