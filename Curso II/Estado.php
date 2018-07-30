<?php

class Estado
{
    private $contrato;

    public function __construct(Contrato $contrato)
    {
        $this->contrato = $contrato;
    }

    public function getEstado()
    {
        return $this->contrato;
    }
}
