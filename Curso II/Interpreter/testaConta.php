<?php
echo "Design Patterns II - TestaConta</br></br> ";

echo "Conta: 10 - 5 + 2 + 10 </br></br> ";
function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

  spl_autoload_register("autoloadDeClasses");

$esquerda = new Subtracao(new Numero(10), new Numero(5));
$direita = new Soma(new Numero(2), new Numero(10));

$conta = new Soma($esquerda, $direita);

$resultado = $conta->avalia();

echo "O resultado é: ".$resultado."</br></br>";

echo "Testando a Multiplicacao e Divisao 10 * 5 + 10 / 5</br></br>";

$esquerda = new Multiplicacao(new Numero(10), new Numero(5));
$direita = new Divisao(new Numero(10), new Numero(5));

$conta = new Soma($esquerda, $direita);

$resultado = $conta->avalia();

echo "O resultado é: ".$resultado."</br></br>";

echo "Testando a Raíz Quadrada 4</br></br>";

$esquerda = new RaizQuadrada(new Numero(4));

$resultado = $esquerda->avalia();

echo "O resultado é: ".$resultado."</br></br>";
