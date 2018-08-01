<?php

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

echo "<h1>Design Pattern II - Command</h1>";

$pedido1 = new Pedido("Renan", 150);
$pedido2 = new Pedido("Marcelo", 250);
$pedido3 = new Pedido("Bianca", 50);
$pedido4 = new Pedido("Caelum", 550);
$pedido5 = new Pedido("Alura", 750);

$fila = new FilaDeTrabalho();

$fila->adiciona(new PagaPedido($pedido1));
$fila->adiciona(new PagaPedido($pedido2));
$fila->adiciona(new PagaPedido($pedido3));
$fila->adiciona(new PagaPedido($pedido4));
$fila->adiciona(new PagaPedido($pedido5));

$fila->adiciona(new ConcluiPedido($pedido1));

$fila->processa();
