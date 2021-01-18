<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcoesAposGerarPedido;
use DateTimeImmutable;

class GerarPedidoHandler
{
    /** @var AcoesAposGerarPedido[] */
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidosRepository, MailServices */)
    {

    }

    public function adicionaAcaoAoGerarPedido(AcoesAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}