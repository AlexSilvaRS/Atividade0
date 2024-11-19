<?php /*Arquivo 1 */

// require 'pessoa.php';
// $pessoa = new Pessoa("Xiru",54);
// echo $pessoa->exibeInfo()."<br>";
// $pessoa->nome = "Lulu";
// echo $pessoa->exibeInfo();

require 'pessoa.php';
$pessoa = new Pessoa();
$pessoa->setNome("Ana Maria Braga");
$pessoa->setIdade(75);
echo $pessoa->exibirPessoa()."<br>";
echo "Nome: ".$pessoa->getNome()."<br>";
echo "Idade: ".$pessoa->getIdade()."<br>";