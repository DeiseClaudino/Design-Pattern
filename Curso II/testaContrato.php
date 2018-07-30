<?php

echo "Design Patterns II- Testando Contratos</br></br> ";

date_default_timezone_set("Brazil/East");
function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$historico  = new Historico();
echo "<pre>";

$contrato = new Contrato("Caelum", date("Y-m-d"));
$historico->adiciona($contrato->salvaEstado());
var_dump($contrato);

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());
var_dump($contrato);

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());
var_dump($contrato);

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());
var_dump($contrato);

$contrato->restaura($historico->pega(1));
var_dump($contrato);
