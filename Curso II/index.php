<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "alura";

$conn = mysql_connect($host, $user, $pass, $banco);

$select = "SELECT * FROM cursos";

var_dump($conn);
