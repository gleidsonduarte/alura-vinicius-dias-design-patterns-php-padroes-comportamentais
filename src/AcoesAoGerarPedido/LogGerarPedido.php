<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcoesAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log da geração de pedido" . PHP_EOL;
    }
}