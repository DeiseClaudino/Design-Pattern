<?php

date_default_timezone_set("Brazil/East");

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");

$geradorDeNotas = new NotaFiscalBuilder();

$geradorDeNotas->adicionaAcao(new EnviadorDeEmail());
$geradorDeNotas->adicionaAcao(new NotaFiscalDao());
$geradorDeNotas->adicionaAcao(new EnviadorDeSms());
$geradorDeNotas->adicionaAcao(new Impressora());

$geradorDeNotas->comEmpresa("Alura");
$geradorDeNotas->comCnpj("1234");
$geradorDeNotas->addItem(new Item("Tijolo", 250));
$geradorDeNotas->addItem(new Item("cimento 1Kg", 250));
$geradorDeNotas->comObservacoes("Tijolos amarelos");
$geradorDeNotas->naData();

$notaFiscal = $geradorDeNotas->builder();

echo "<pre>";
var_dump($notaFiscal);
