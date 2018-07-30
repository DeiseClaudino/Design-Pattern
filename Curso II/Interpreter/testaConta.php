<?php
echo "Design Patterns II - TestaConta</br></br> ";

function autoloadDeClasses($nomeDaClasse)
{
    require $nomeDaClasse.".php";
}

  spl_autoload_register("autoloadDeClasses");

$esquerda = new Subtracao(new Numero(10), new Numero(5));
$direita = new Soma(new Numero(2), new Numero(10));

$conta = new Soma($esquerda, $direita);

$resultado = $conta->avalia();

echo $resultado;
