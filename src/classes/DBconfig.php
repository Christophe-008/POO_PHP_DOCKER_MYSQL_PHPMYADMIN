<?php 

namespace MonApp;

use PDO;

class DBconfig{

    private $host = 'db';
    private $dbname = 'marvel';
    private $username = 'user';
    private $password = 'mdp'; 

    function connect(){
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}