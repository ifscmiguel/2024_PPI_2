<?php
class Usuario{

    # definição de atributos
    public $nome;
    # a partir do php 7.4
    public string $sobrenome;

    # Método Construtor
    # é o método que é executado automaticamente
    # quando um objeto é instanciado
    function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    # método para retornar o nome completo
    function getNomeCompleto(){
        return "$this->nome $this->sobrenome";
    }

    # objeto como uma função
    function __invoke()
    {
        echo '<hr>';
        echo $this->getNomeCompleto();
    } 

    # é chamado quando tentado atribuir valor para um atributo não existente
    function __set($nome, $valor){
        echo "<p>Foi chamado o atributo $nome com valor $valor</p>";
    }

    # é chamado quando tentar pegar valor de um atributo inexistente
    function __get($nome){
        echo "<p>Foi chamado o atributo inexistente $nome</p>";
    }




}