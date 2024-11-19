<?php
/*Arquivo 2*/
function exibirCabecalho()
{
    echo "<header><h1> Cabeçalho </h1> </header>";
}
function exibirCabecalhoM($opc, $empresa)
{
    if ($opc == 1) {
        echo "<h1> cabeçalho para Supermercado $empresa</h1>";
    } else if ($opc == 2) {
        echo "<h1> Cabeçalho para Auto Peças $empresa</h1>";
    } else {
        echo "<h1> Cabeçalho geral da empresa $empresa</h1>";
    }
}
function somar($valor1, $valor2)
{

    return ($valor1 + $valor2);
}
function darDesconto($valor, $percentual)
{
    $total = $valor - ($valor * ($percentual / 100));
    return $total;
}
