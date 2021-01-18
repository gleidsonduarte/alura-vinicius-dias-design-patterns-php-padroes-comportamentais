<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Um orçamento finalizado não pode receber desconto!');
    }
}
