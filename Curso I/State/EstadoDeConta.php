<?php

interface EstadoDeConta
{
    public function saca(Conta $conta, $valor);
    public function deposita(Conta $conta, $valor);
}
