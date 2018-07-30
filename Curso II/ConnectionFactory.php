<?php

class ConnectionFactory
{
    public function getConnection($banco)
    {
        $conn = false;

        $banco = parse_ini_file('config.ini');
        $banco = $banco["tipoBanco"];
        if ($tipoBanco == "mysql") {
            $conexao = mysqli_connect("meuHost", "meuUsuario", "minhaSenha", "meuBanco");
        } elseif ($tipoBanco == "postgree") {
            $conexao = pg_connect("host=meuHost port=5432 dbname=meuBanco user=meuUsuario password=meuBanco");
        }

        return $conn;
    }
}
