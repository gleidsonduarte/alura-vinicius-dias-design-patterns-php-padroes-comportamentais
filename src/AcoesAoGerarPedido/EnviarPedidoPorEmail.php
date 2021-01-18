<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcoesAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado" . PHP_EOL;
    }
}