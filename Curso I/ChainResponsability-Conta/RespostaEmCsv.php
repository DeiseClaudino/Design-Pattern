<?php


class RespostaEmCsv implements Resposta
{
    private $outraResposta;


    public function __construct(Resposta $resposta)
    {
        $this->$outraResposta = $resposta;
    }

    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() == Formato::$CSV) {
            echo $conta->getNome(). ";".$conta->getSaldo();
        } else {
            $outraResposta->responde($req, $conta);
        }
    }
}
