<?php

class Impressora
{
    public function visitaSoma(Soma $soma)
    {
        echo "(";
        VISITA($esquerda);
        echo "+";
        VISITA($direita);
        echo ")";
    }

    public function visitaSubtracao(Subtracao $subtracao)
    {
        echo "(";
        VISITA($esquerda);
        echo "+";
        VISITA($direita);
        echo ")";
    }

    public function vistaNumero(Numero $numero)
    {
        echo $numero->getNumero();
    }
}
