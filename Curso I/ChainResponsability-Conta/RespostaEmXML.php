<?php

class RespostaEmXML implements Resposta
{
    private $outraResposta;

    public function __construct(Resposta $resposta)
    {
        $this->$outraResposta = $resposta;
    }

    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() == Formato::$XML) {
            echo "<conta><titular>".$conta->getNome(). "</titular><saldo>".$conta->getSaldo()."</slado></conta>";
        } else {
            $outraResposta->responde($req, $conta);
        }
    }
}
