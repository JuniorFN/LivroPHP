<?php
    class ContaCorrent extends Conta
    {
        var $Limite;
        
        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo,$Limite) 
        {
            //CHAMADA CONSTRUCT DA CLASSE PAI
            parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
            $this->Titular = $Titular;
        }
        
        //METODO RETIRAR SOBRESCRITO
        function Retirar($quantia) 
        {
            //IMPOSTO SOBRE MOVIMENTACAO FINANCEIRA
            $cpmf = 0.05;
            if(($this->Saldo + $this->Limite) >= $quantia)
            {
                //EXECUTA METODO DA CLASSE PAI
                parent::Retirar($quantia);
                
                //DEBITA IMPOSTO
                parent::Retirar($quantia*$cpmf);
            }
            else
            {
                echo "Retirada não permitida <br>";
                return FALSE;
            }    
       
            return TRUE;
         }
        
    }
?>

