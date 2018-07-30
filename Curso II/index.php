<?php
  error_reporting(0);

  echo "Design Patterns II</br></br> ";

  function autoloadDeClasses($nomeDaClasse)
  {
      require $nomeDaClasse.".php";
  }

  spl_autoload_register("autoloadDeClasses");


  $factory = new ConnectionFactory();

  $conexao = $factory->getConnection();

  $select = "SELECT * FROM cursos";

  $historico  = new Historico();

  $contrato = new Contrato(date("Y-m-d"), "Renan");
  $historico->adiciona($contrato->salvaEstado());

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());
