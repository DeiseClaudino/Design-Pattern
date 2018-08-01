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
      echo "</br>Finalizando o pedido do cliente: ".$this->pedido->getCliente()."</br>";
        $this->pedido->finaliza();
    }
}
