<?php
    class Conta
    {
        var $Agencia;
        var $Codigo;
        var $DataDeCriacao;
        var $Titular;
        var $Senha;
        var $Saldo;
        var $Cancelado;
        
        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo) 
        {
            $this->Agencia = $Agencia;
            $this->Codigo = $Codigo;
            $this->DataDeCriacao = $DataDeCriacao;
            $this->Titular = $Titular;
            $this->Senha = $Senha;
            
            //CHAMADA A OUTRO METODO DA CLASSE
            $this->Depositar($Saldo);
            $this->Cancelado = FALSE;
        }
        
        function __destruct() 
        {
            echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} Finalizado...\n";
        }
                function Retirar ($quantia)
        {
            if($quantia > 0)
            {
                $this->Saldo -= $quantia;
            }
        }
        
        function Depositar ($quantia)
        {
            if($quantia > 0)
            {
                $this->Saldo += $quantia;
            }
        }
        
        function ObterSaldo()
        {
            return $this->Saldo;
        }
        
    }
?>
