<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\ImpostoInterface;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, ImpostoInterface $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
