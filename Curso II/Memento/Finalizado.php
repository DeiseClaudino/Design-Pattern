<?php
class Finalizado implements TipoDeContrato
{
    public function avanca(Contrato $contrato)
    {
      throw new \Exception("Este contrato já se encontra finalizado");

    }
}
