<?php 

namespace App; 

use PDO;

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $dbconn;
    
    function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'dbbookstore';
        $this->dbconn = null;
    }

    public function connect()
    {
        try {
            $this->dbconn = new PDO('mysql:host='.$this->host.';dbname='.$this->database.'', $this->user, $this->password) or die("Cannot connect to MySQL.");
            // set the PDO error mode to exception
            $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Database connected successfully";

            return $this->dbconn;
        } catch(PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            die();
        }
    }

    /** Get books records from database for autocomplete */
     public function fetch($term) {
        $this->connect();
        $sth = $this->dbconn->prepare( "SELECT title FROM books WHERE `title` like ?");
        $sth->bindValue(1, "%$term%", PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll();        
        $this->dbconn = null;

        return $result;
    }
}