<?php

class RelatorioSimples extends TemplateRelatorios
{
    public function cabecalho()
    {
        echo "Banco XYZ";
    }

    public function rodape()
    {
        echo "1234-5678";
    }

    public function corpo($contas)
    {
        foreach ($contas as $conta) {
            echo $conta->getNome(). "-" . $conta->getSaldo();
        }
    }
}
