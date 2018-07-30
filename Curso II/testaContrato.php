<?php

echo "Design Patterns II- Testando Contratos</br></br> ";

date_default_timezone_set("Brazil/East");
function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$historico  = new Historico();
$contrato = new Contrato("Caelum", date("Y-m-d"));

echo "<pre>";
var_dump($contrato);

$historico->adiciona($contrato->salvaEstado());
$contrato->avanca();
var_dump($contrato);

$historico->adiciona($contrato->salvaEstado());
$contrato->avanca();
var_dump($contrato);

var_dump($historico->pega(0)->getEstado());
