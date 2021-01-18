<?php

use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;

require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);