<?php

require 'Orcamento.php';
require 'IDesconto.php';
require 'DescontoPor5Itens.php';
require 'Desconto500Reais.php';
require 'Desconto300Reais.php';
require 'SemDesconto.php';
require 'Item.php';
require 'CalculadoraDeImpostos.php';
require 'CalculadoraDeDescontos.php';
require 'Imposto.php';
require 'ICMS.php';
require 'ISS.php';
require 'KCV.php';
require 'ICCC.php';



$reforma = new Orcamento(1200);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS());

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
