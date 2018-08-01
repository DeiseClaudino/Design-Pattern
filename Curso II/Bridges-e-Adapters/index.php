<?php

date_default_timezone_set("Brazil/East");

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$data = new Relogio();

echo $data->getDia();
echo "/";
echo $data->getMes()."</br>";

$mapa = new GoogleMaps();

echo $mapa->getMapa()."</br>";

$mapa2 = new MapLink();

echo "</br>".$mapa2->getMapa()."</br>";
