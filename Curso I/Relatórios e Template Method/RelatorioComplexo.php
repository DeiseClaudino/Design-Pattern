<?php

class RelatorioComplexo extends TemplateRelatorios{
  public function cabecalho()
  {
    echo "Banco XYZ";
    echo "Avenida Paulista, 123";
    echo "1234-5678";
  }

  public function rodape($value='')
  {
    echo "Banco@xyz.com";
    echo date(d/m/Y);
  }

  public function corpo($contas)
  {
    foreach ($contas as $conta) {
      echo $conta->getNome()."-". $conta->getNumero() . " - " . $conta->getAgencia() . " - " .$ conta->getSaldo();;
    }
  }
}
