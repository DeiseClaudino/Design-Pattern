<?php

class NotaFiscal
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataDeEmissao;

    public function __construct($empresa, $cnpj, $dataDeEmissao, $valorBruto, $valorImpostos, $itens, $observacoes)
    {
        $this->empresa = $empresa;
        $this->cnpj = $cnpj;
        $this->itens = $itens;
        $this->valorBruto = $valorBruto;
        $this->valorImpostos = $valorImpostos;
        $this->observacoes = $observacoes;
        $this->dataDeEmissao = $dataDeEmissao;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
}
