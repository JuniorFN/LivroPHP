<?php
    class ContaPoupanca extends Conta
    {
        var $Aniversario;
        
        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario) 
        {
            //CHAMADA DO METODO CONSTRUTOR DA CLASSE PAI
            parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
            $this->Aniversario = $Aniversario;
            
        }
        //METODO RETIRAR SOBRESCRITO
        
        function Retirar($quantia) {
            if($this->Saldo >= $quantia)
            {
                //EXECUTA METODO DA CLASSE PAI
                parent::Retirar($quantia);
            }    
            else
            {
                echo "Retirada não permitida </br>";
                return false;
            }
            //RETIRADA PERMITIDA
            return true;
        }
        
    }
    
    
?>