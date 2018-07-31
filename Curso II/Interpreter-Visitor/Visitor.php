<?php

interface Visitor
{
    public function visitaSoma(Soma $soma);
    public function visitaSubtracao(Subtracao $subtracao);
    public function visitaMultiplicacao(Multiplicacao $multiplicação);
    public function visitaDivisao(Divisao $divisao);
    public function visitaRaizQuadrada(RaizQuadrada $raizQuadrada);
    public function visitaNumero(Numero $numero);
}
