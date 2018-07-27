<?php

echo "Design Patterns I</br></br> ";

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS(new KCV()));

echo "<br/>";

echo $calculadora->calcula($reforma, new ISS());

echo "<br/>";

echo $calculadora->calcula($reforma, new KCV());

echo "<br/>";

echo $calculadora->calcula($reforma, new ICCC());

echo "<br/>Testes de Descontos<br/>";

$calculador = new CalculadoraDeDescontos();

$reforma->addItem(new Item("TIJOLO", 250.0));

$reforma->addItem(new Item("CIMENTO 1kg", 250.0));

$desconto = $calculador->desconto($reforma);

echo $desconto;

echo "<br/>Desconto Extra<br/>";

echo $reforma->getValor()."<br/>";

$reforma->aplicaDescontoExtra();

echo $reforma->getValor()."<br/>";

$reforma->aprova();

$reforma->aplicaDescontoExtra();

echo $reforma->getValor()."<br/>";

$reforma->finaliza();

$reforma->aplicaDescontoExtra();
