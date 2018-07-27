<?php

class EnviadorDeEmail implements AcaoAposGerarNota
{
    public function executa(NotaFiscal $notaFiscal)
    {
        echo "Enviando por email.</br>";
    }
}
