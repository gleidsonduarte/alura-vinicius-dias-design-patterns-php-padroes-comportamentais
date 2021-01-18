<?php

namespace Alura\DesignPatter\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
