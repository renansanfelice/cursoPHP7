<?php

class sql extends PDO
{

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    }

    private function setParams($comando, $parametros = array())
    {

        foreach ($parametros as $key => $value) {

            $this->setParam($comando, $key, $value);
        }
    }

    private function setParam($comando, $key, $value)
    {

        $comando->bindParam($key, $value);
    }

    public function sqlQuery($rowQuery, $params = array())
    {

        $stmt = $this->conn->prepare($rowQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function select($rowQuery, $params = array())
    {

        $stmt = $this->sqlQuery($rowQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}