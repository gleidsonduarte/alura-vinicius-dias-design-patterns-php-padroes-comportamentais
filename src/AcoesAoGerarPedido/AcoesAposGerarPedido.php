<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcoesAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}