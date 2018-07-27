<?php

abstract class TemplateRelatorios
{
    abstract protected function cabecalho();
    abstract protected function rodape();
    abstract protected function corpo($contas);


    public function imprime($contas)
    {
        $this->cabecalho();
        $this->corpo($contas);
        $this->rodape();
    }
}
