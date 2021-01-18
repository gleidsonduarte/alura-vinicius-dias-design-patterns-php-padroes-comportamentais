<?php

namespace Alura\DesignPattern;

use Alura\DesignPatter\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPatter\Descontos\DescontosMaisDe500Reais;
use Alura\DesignPatter\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontosMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
