<?php

class ConnectionFactory
{
    public function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "alura";

        $conn = mysql_connect($host, $user, $pass, $banco);

        return $conn;
    }
}
