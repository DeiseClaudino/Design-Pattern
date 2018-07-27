<?php

class Conta
{
    protected $saldo;
    protected $estado;

    public function saca($valor)
    {
        $this->estado->saca($this, $valor);
    }

    public function deposita($valor)
    {
        $this->estado->deposita($this, $valor);
    }
}
