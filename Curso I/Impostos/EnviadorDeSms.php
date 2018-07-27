<?php

class EnviadorDeSms implements AcaoAposGerarNota
{
    public function executa(NotaFiscal $notaFiscal)
    {
        echo "Enviando por sms.</br>";
    }
}
