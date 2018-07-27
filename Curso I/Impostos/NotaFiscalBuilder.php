<?php
class NotaFiscalBuilder
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataDeEmissao;
    private $todasAcoesASeremExecutadas;

    public function ___construct()
    {
        $this->valorBruto = 0;
        $this->valorImpostos = 0;
        $this->itens = array();
        $this->$todasAcoesASeremExecutadas = array();
    }

    public function adicionaAcao(AcaoAposGerarNota $novaAcao)
    {
        $this->$todasAcoesASeremExecutadas[] = $novaAcao;
    }

    public function comEmpresa($nomeEmpresa)
    {
        $this->empresa = $nomeEmpresa;
    }

    public function comCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getValor();
        $this->valorImpostos += $novoItem->getValor() * 0.2;
    }

    public function comObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    public function naData($data = null)
    {
        if (is_null($data)) {
            $this->dataDeEmissao = date("Y-m-d h:i:s");
        } else {
            $this->dataDeEmissao = $data;
        }
    }

    public function builder()
    {
        $nf = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacoes, $this->dataDeEmissao);

        foreach ($this->$todasAcoesASeremExecutadas as $acao) {
            $acao->executa($nf);
        }

        return $nf;
    }
}
