<?php

$cpf = /// pega cpf
$cliente = new ClienteDao()->buscaPorCpf($cpf);

$fatura = new Fatura($cliente, $valor);

$cobranca = new Cobranca(new Boleto(), $fatura);
$cobranca->emite();

$contato = new ContatoCliente($cliente, $cobranca);
$contato->dispara();
