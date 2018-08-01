<?php

date_default_timezone_set("Brazil/East");

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");


$google = "http://maps.google.com.br/maps?q=rua vergueiro";

$data = new Relogio();

echo $data->getDia();
echo "/";
echo $data->getMes();
