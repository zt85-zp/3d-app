<?php

namespace MyApp;

use PDO;
use PDOException;

class Database
{
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $dbh;
    private $stmt;

    private $db_dir = 'sqlite:./public/db/database.db';
    public $table_name = "co_brands";
    
    public function __construct(){
      try{
        $this->dbh = new PDO($this->db_dir, $this->user, $this->pass, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
          ));
      }catch(PDOException $e){
          print($e->getMessage(). "opendatabase");
          print "Error in open db ".$e->getMessage();
      }
    }

    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            // Handle the exception (log, display an error message, etc.)
            die($e->getMessage());
        }
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function beginTransaction()
    {
        $this->dbh->beginTransaction();
    }

    public function commit()
    {
        $this->dbh->commit();
    }

    public function rollBack()
    {
        $this->dbh->rollBack();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
