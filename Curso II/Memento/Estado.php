<?php

class Estado
{
    private $contrato;
    private $horaGerada;

    public function __construct(Contrato $contrato)
    {
        $this->contrato = $contrato;
        $this->horaGerada = date("h:i:s");
    }

    public function getEstado()
    {
        return $this->contrato;
    }
}
