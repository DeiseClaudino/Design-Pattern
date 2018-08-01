<?php

class ConcluiPedido implements Comando
{
    private $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function executa($value='')
    {
        $pedido->finaliza();
    }
}
