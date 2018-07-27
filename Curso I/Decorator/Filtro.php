<?php

abstract class Filtro
{
    protected $outroFiltro;

    public function __construct($outroFiltro = null)
    {
        $this->outroFiltro = $outroFiltro;
    }

    abstract public function filtra($contas);

    protected function proximo($contas)
    {
        if (is_null($this->outroFiltro)) {
            return $this->outroFiltro->filtra($contas);
        } else {
            return array();
        }
    }
}
