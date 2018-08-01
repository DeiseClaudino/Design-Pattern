<?php

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");


$google = "http://maps.google.com.br/maps?q=rua vergueiro";

$agora = new Relogio()->hoje();
