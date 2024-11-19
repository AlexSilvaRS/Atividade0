<?php
/*Arquivo 1 */
require 'arquivo2.php';
exibirCabecalhoM(3, " do xuxu");
echo " A soma de R$ 50,00 + R$20,00 é R$ " . somar(50, 20) . "<br>";
echo " O produto custa R$ 400,00 e o cliente tem um desconto de 50%, O cliente vai pagar R$" . darDesconto(400, 50) . "<br>";
$total = darDesconto(1000, 10);
echo " O valor de R$1000,00 com desconto de 10% custara R$" . number_format($total, 2);




