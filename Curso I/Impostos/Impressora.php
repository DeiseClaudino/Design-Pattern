<?php

class Impressora implements AcaoAposGerarNota
{
    public function executa(NotaFiscal $notaFiscal)
    {
        echo "Imprimindo nota fiscal.</br>";
    }
}
