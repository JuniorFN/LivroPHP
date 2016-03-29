<?php
    class Pessoa
    {
       var $Codigo;
       var $Nome;
       var $Altura;
       var $Idade;
       var $Nascimento;
       var $Escolaridade;
       var $Salario;
       
       //CONSTRUTOR
       function __construct($Codigo,$Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
       {
           $this->Codigo = $Codigo;
           $this->Nome = $Nome;
           $this->Altura = $Altura;
           $this->Idade = $Idade;
           $this->Nascimento = $Nascimento;
           $this->Escolaridade = $Escolaridade;
           $this->Salario = $Salario;
       }
       
       function __destruct() {
           echo "Objeto {$this->Nome} finalizado...\n";
       }
       //FUNCAO CRESCER ACRESCENTA CENTIMENTROS NA ALTURA
        function Crescer ($centimetros)
        {

            if ($centimetros > 0) 
            {
                $this-> Altura += $centimetros;
            }
        

        }
        
        //FUNCAO FORMAR ACRESCENTA TITULO A ESCULARIDADE
        function Formar ($titulo)
        {
            $this->Escolaridade = $titulo;
        }
        
        //FUNCAO ENVELHECER ACRESCENTA ANOS A IDADE
        function Envelhecer ($anos)
        {
            if ($anos > 0)
            {
                $this->Idade += $anos;
            }
        }
        
  }
?>
