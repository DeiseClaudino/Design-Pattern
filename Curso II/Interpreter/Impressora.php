<?php

class Impressora implements Visitor
{
    public function visitaSoma(Soma $soma)
    {
        echo "(";
        $soma->getEsquerda()->aceita($this);
        echo "+";
        $soma->getDireita->aceita($this);
        echo ")";
    }

    public function visitaSubtracao(Subtracao $subtracao)
    {
        echo "(";
        $subtracao->getEsquerda()->aceita($this);
        echo "-";
        $subtracao->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaMultiplicacao(Multiplicacao $multiplicação)
    {
        echo "(";
        $subtracao->getEsquerda()->aceita($this);
        echo "*";
        $subtracao->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaDivisao(Divisao $divisao)
    {
        echo "(";
        $subtracao->getEsquerda()->aceita($this);
        echo "/";
        $subtracao->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaRaizQuadrada(RaizQuadrada $raizQuadrada)
    {
        echo "(";
        echo "V";
        $subtracao->getEsquerda()->aceita($this);
        echo ")";
    }



    public function visitaNumero(Numero $numero)
    {
        echo $numero->getNumero();
    }
}
