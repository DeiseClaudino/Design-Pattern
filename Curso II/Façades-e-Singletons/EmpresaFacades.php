<?php

class EmpresaFacades
{
  public function buscaCliente($cpf)
  {
    return new ClienteDao()->buscaPorCpf($cpf);
  }

  public function criaFatura($cliente, $valor)
  {
    $fatura = new Fatura($cliente, $valor);
    return $fatura;
  }

  public function geraCobranca(Fatura $fatura)
  {
    $cobranca = new Cobranca(new Boleto(), $fatura);
    $cobranca->emite();

    return $cobranca;
  }

  public function fazContato(Cliente $cliente, Cobranca $cobranca)
  {
    $contato = new ContatoCliente($cliente, $cobranca);
    $contato->dispara();

    return $contato;
  }
}
