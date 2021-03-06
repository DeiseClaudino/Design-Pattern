<?php

class PagaPedido implements Comando
{
    private $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function executa()
    {
      echo "</br>Pagando pedido do cliente: ".$this->pedido->getCliente()."</br>";
        $this->pedido->paga();
    }
}
