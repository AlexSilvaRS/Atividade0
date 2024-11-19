<?php
// Arquivo Public //
// class Pessoa
// {
//     public $nome;
//     public $idade;

//     // Construtor
//     function __construct($nome, $idade)
//     {
//         $this->nome = $nome;
//         $this->idade = $idade;
//     }
//     function exibeInfo()
//     {
//         return "Nome:. $this->nome ,Idade:.$this->idade";
//     }
// }


/*Arquivo Private*/

class Pessoa {
    private $nome;
    private $idade;

    // Construtor
    function __construct(){

}
public function setNome($nome){
    $this->nome = $nome;
}
function getNome(){
return $this->nome;
}
function setIdade($idade){
    $this->idade = $idade;
}
function getIdade(){
    return $this->idade;
}
function exibirPessoa(){
    return "Nome $this->nome<br>Idade: $this->idade";
}
}
